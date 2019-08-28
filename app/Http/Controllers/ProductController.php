<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = Category::all();
         $product = Product::all();
        return view('admin.product.index', compact('product', 'category'))->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory=Subcategory::all();
        $category = Category::all();
     return view('admin.product.addProduct', compact('category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required |numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'category_id'  => 'required',
            'subcategory_id'  => 'required',
             ]);
        
        $product = New Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
         $product->subcategory_id = $request->subcategory_id;
       // $product->title = $request->title;
        if($request->hasFile('image')){
            $file = $request ->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location, $filename);
            $product->image = $filename;
        }
        $product ->save();
        return back()->withsuccess('Product has been added Succesfully!!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $subcategory=Subcategory::all();
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','category','subcategory'));


            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required |numeric',
            'category_id'  => 'required',
            'subcategory_id' => 'required',
             ]);    

        
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename =time().'.'.$file->getClientOriginalExtension();
        $location =public_path('/images');
        $file->move($location, $filename);
        $oldImage= $product->image;
        \Storage::delete($oldImage);
        $product->image = $filename;
    }
        $product->save();
       return back()->withInfo('Product has been updated successfully!!!!!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::find($id);
        Storage::delete($product->image);
        $product->delete();

        return back()->withDanger('Product has been deleted Succesfully!!!!');

            }

            //Ajax Load 
            
}
