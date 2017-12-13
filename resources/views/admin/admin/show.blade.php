@extends('admin/app')
<link rel="stylesheet" href="/admin/datatables.net-bs/css/dataTables.bootstrap.min.css">
@section('activeAdm','text-success')
@section('main-content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Tags
        <small>goes here...</small>
      </h1> -->
       <a href="{{ route('admin.create') }}" class="btn btn-success">Create Admin</a>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           @include('includes.message')
        <div class="box-header with-border">
          <h3 class="box-title">Tags Table</h3>
          <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Assigned Roles</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($admins as $admin)
                              
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$admin->name }}</td>
                            <td>
                              @foreach($admin->roles as $admin_role)
                                
                                  <mark>{{$admin_role->name}}</mark>&nbsp
                               
                              @endforeach
                            </td>
                            <td>{{$admin->status?'Active':'Not Active'}}</td>
                            <td> <a href="{{ route('admin.edit',$admin->id) }}" class="btn btn-warning btn-xs">Edit</a></td>
                            <form id="deleteForm{{$admin->id}}" action="{{route('admin.destroy',$admin->id)}}" method="post" >
                              {{ csrf_field()}}
                              {{method_field("DELETE")}}
                            <td><a href="" onclick="if(confirm('Are you sure you want to delete this admin?')) {event.preventDefault();document.getElementById('deleteForm{{$admin->id}}').submit();}else {event.preventDefault(); }" class="btn btn-danger btn-xs">Delete</a></td>
                          </tr>
                         @endforeach
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Assigned Roles</th>
                            <th>Status</th>
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