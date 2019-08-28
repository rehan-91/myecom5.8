<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $category = Category::all();
        $subcategory = Subcategory::paginate(10);
        return view('admin.subcategory.index', compact('category','subcategory'))->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('admin.subcategory.addsubcategory', compact('category'));
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

            'category_id' => 'required',
        ]);

        $subcategory = New Subcategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;


        $subcategory->save();

        return back()->withsuccess('New Subcategory added!!!');
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
        $category = Category::all();
         $subcategory= Subcategory::find($id);
            return view('admin.subcategory.edit', compact('subcategory','category'));
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
            'name' => 'required',
        ]);

        $subcategory = Subcategory::find($id);

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;

        $subcategory->save();

        return back()->withsuccess('SubCategory has been updated!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();

        return back()->withsuccess('SubCategory has been deleted!!!!'); 
    }
}
