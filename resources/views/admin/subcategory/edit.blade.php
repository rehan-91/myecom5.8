
@extends('admin.includes.main_admin')
@section('title',' Edit Subcategory')
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
        Edit SubCategory 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit SubCategory</a></li>
        <li class="active">Edit SubCategory</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SubCategory Details</h3>
        <div id="myMsg" class="text-center">@include('admin.includes.info')</div>
        <script language="JavaScript" type="text/javascript">timedMsg()</script>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('subcategory.update', $subcategory->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('put')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"   name="name" value="{{$subcategory->name}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                   <select class="form-control select2" style="width: 100%;" name="category_id">
                    <option value="" disabled selected> Select Category</option>
                     @foreach($category as $categories)
                  <option value="{{$categories->id}}"<?php  if ($subcategory->category_id == $categories->id){ echo "selected";};?>> {{$categories->name}} </option>
                  @endforeach
                </select>
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