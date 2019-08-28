
@extends('admin.includes.main_admin')
@section('title',' Add Product')
@section('content')
<script>
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",2000);
}
 
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Product
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit Product</a></li>
        <li class="active">Edit Product</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product Details</h3>
        <div id="myMsg" class="text-center">@include('admin.includes.info')</div>
<script language="JavaScript" type="text/javascript">timedMsg()</script>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data" method="post">
              {{csrf_field()}}
              {{method_field('put')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"      name="title" value="{{$product->title}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" id="exampleInputPassword1"   name="description" value="{{$product->description}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" >Price </label>
                  <input type="text" class="form-control" id="exampleInputPassword1"   name="price" value="{{$product->price}}">
                </div>

               <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                   <select class="form-control select2" style="width: 100%;" name="category_id">
                    <option value="" disabled selected> Select Category</option>
                     @foreach($category as $categories)
                  <option value="{{$categories->id}}"<?php  if ($product->category_id == $categories->id){ echo "selected";};?>> {{$categories->name}} </option>
                  @endforeach
                </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">SubCategory</label>
                   <select class="form-control select2" style="width: 100%;" name="subcategory_id">
                    <option value="" disabled selected> Select SubCategory</option>
                     @foreach($subcategory as $subcategories)
                  <option value="{{$subcategories->id}}"<?php  if ($product->subcategory_id == $subcategories->id){ echo "selected";};?>> {{$subcategories->name}} </option>
                  @endforeach
                </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1" >Image </label>
                  <input type="file" class="form-control" id="exampleInputPassword1"   name="image">
                </div>
                <div class="form-group">
                  <img src="{{asset('images/'.$product->image)}}" width="50%" height="200px">
                  <img src="">
                  </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>

</div>
      </section>
  </div>
  


@endsection