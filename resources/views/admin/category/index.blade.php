
@extends('admin.includes.main_admin')
@section('title','All Category')
@section('content')
<script>
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",2000);
}
 
</script>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      All Categories
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">All Categories</a></li>
        <li class="active">All Categories</li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">

       <div class="box"> 
            <!-- /.box-header -->
            <div class="box-body">
              <div id="myMsg">@include('admin.includes.info')</div>
  
  <script language="JavaScript" type="text/javascript">timedMsg()</script>

            </div>
            @if (count($category)>0)
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>S. No</th>
                  <th>Name</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach($category as $categories)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$categories->name}}</td>
                  
                  <td width="10"><a href="{{route('category.edit', $categories->id)}}" class="btn btn-success btn-sm"> Edit </a></td>

                   <td>
          <form action="{{route('category.destroy' , $categories->id)}}" method="post">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                  
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Delete
                 </button>
     
                <div class="modal modal-danger fade" id="modal-danger">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                          <p>Are  sure to delete this category ?&hellip;</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-outline">Delete</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
              </form>
              </td>

              </tr>
              @endforeach
              
          </tbody></table>
           @else
               <div class="text-center">No Category  Found, please add category  !</div>
               @endif
         
        </div>
          
</div>


    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->


@endsection
