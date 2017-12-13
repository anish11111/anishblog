@extends('admin/app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('admin/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('activeCat','text-success')
@section('main-content')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Category
        <small>goes here...</small>
      </h1> -->
      <a href="{{ route('category.create') }}" class="btn btn-success">Create category</a>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Category Table</h3>

          <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $category)
                              
                          <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td> <a href="{{ route('category.edit',$category->id) }}" class="btn btn-warning btn-xs">Edit</a></td>
                            <form id="deleteForm{{$category->id}}" action="{{route('category.destroy',$category->id)}}" method="post" >
                              {{ csrf_field()}}
                              {{method_field("DELETE")}}
                            <td><a href="" 
                              onclick="if(confirm('Are you sure you want to delete this category?')) 
                              {
                              event.preventDefault();
                              document.getElementById('deleteForm{{$category->id}}').submit();
                            }else {
                            event.preventDefault(); 
                          }" class="btn btn-danger btn-xs">Delete</a></td></form>
                          </tr>
                            @endforeach
                          
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.box-body -->
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footerSection')
  <script src="{{asset('admin/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection