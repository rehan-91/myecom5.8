
@extends('admin.includes.main_admin')
@section('title',' Add Category')
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
        Add New Category
       </h1>
            <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Category</a></li>
        <li class="active">Add Category</li>
      </ol>
    </section>
<section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category Details</h3>
             <div id="myMsg">@include('admin.includes.info')</div>
  
<script language="JavaScript" type="text/javascript">timedMsg()</script>

            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('category.store')}}"  method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Category Name" name="name">
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