
@extends('admin.includes.main_admin')
@section('title','All Product')
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
      All Products
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">All Product</a></li>
        <li class="active">All Product</li>
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
             @if (count($product)>0)
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                   <th>S. No</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Category Name</th>
                  <th>SubCategory Name</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $products)
                <tr>
                  <td>{{$no++}}</td>
                  <td width="50"><img src="{{asset('images/'.$products->image)}}" style="width:100%"></td>
                  <td>{{$products->title}} </td>
                  <td>{{$products->description}} </td>
                  <td>{{$products->price}}</td>
                  <td>{{$products->categories->name}}</td>
                  <td>{{$products->subcategories->name}}</td>
                  <td width="10"><a href="{{route('product.edit', $products->id)}}" class="btn btn-success btn-sm"> Edit </a></td>
                  
                 <td>

         <form action="{{route('product.destroy', $products->id)}}" method="post">
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
                <p>Are  sure to delete this product ?&hellip;</p>
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
               <div class="text-center">No Product  Found, Add some product !</div>
               @endif
        </div>
        
          
</div>


    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->



@endsection
