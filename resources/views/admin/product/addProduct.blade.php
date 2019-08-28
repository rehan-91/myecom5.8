
@extends('admin.includes.main_admin')
@section('title',' Add Product')
@section('content')
<script>
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",4000);
}
 
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Add Product
       </h1>
            <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Product</a></li>
        <li class="active">Add Product</li>
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
             <div id="myMsg">@include('admin.includes.info')</div>
  
<script language="JavaScript" type="text/javascript">timedMsg()</script>

            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product Description " name="description">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product Price" name="price">
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                   <select class="form-control select2" style="width: 100%;" name="category_id" id="category_id">
                  <option value="" disabled selected>Select Category </option>
                  @foreach($category as $categories)
                  <option value="{{$categories->id}}"> {{$categories->name}}</option>
                  @endforeach
                </select>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">SubCategory</label>
                   <select class="form-control select2" style="width: 100%;" name="subcategory_id" id="subcategory_id">
                  <option value="" disabled selected>Select SubCategory </option>
                  @foreach($subcategory as $subcategories)
                  <option value="{{$subcategories->id}}"> {{$subcategories->name}}</option>
                  @endforeach
                </select>
                </div>
              
                <div class="form-group">
                  <label for="exampleInputFile">Product Image</label>
                  <input type="file" id="exampleInputFile" name="image">

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