
@extends('admin.includes.main_admin')
@section('title',' Add Category')
@section('content')
<script>
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",1000);
}
 
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Add New Subcategory
       </h1>
            <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add SubCategory</a></li>
        <li class="active">Add SubCategory</li>
      </ol>
    </section>
<section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SubCategory Details</h3>
             <div id="myMsg">@include('admin.includes.info')</div>
  
<script language="JavaScript" type="text/javascript">timedMsg()</script>

            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('subcategory.store')}}"  method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="SubCategory Name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                   <select class="form-control select2" style="width: 100%;" name="category_id">
                  <option value="" disabled selected>Select Category </option>
                @foreach($category as $categories)
                  <option value="{{$categories->id}}">{{$categories->name}} </option>
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