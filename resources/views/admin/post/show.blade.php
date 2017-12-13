@extends('admin/app')
<link rel="stylesheet" href="/admin/datatables.net-bs/css/dataTables.bootstrap.min.css">
@section('activePost','text-success')
@section('main-content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Post
        <small>info goes here...</small>
      </h1> -->
      @can('posts.create', Auth::user())

      <a href="{{ route('post.create') }}" class="btn btn-success">Create post</a>
      @endcan
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Post Table</h3>

          <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>SubTitle</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            @can('posts.update', Auth::user())
                            <th>Edit</th>
                            @endcan
                            @can('posts.delete', Auth::user())
                            <th>Delete</th>
                            @endcan
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($posts as $post)

                          <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->subtitle }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at }}</td>
                            @can('posts.update', Auth::user())
                            <td> <a href="{{ route('post.edit',$post->id) }}" class="btn btn-warning btn-xs">Edit</a></td>
                            @endcan
                             @can('posts.delete', Auth::user())
                            <form id="deleteForm{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post" >

                              {{ csrf_field()}}
                              {{method_field("DELETE")}}
                            <td><a href="" onclick="if(confirm('Are you sure you want to delete this post?')) {event.preventDefault();document.getElementById('deleteForm{{$post->id}}').submit();}else {event.preventDefault(); }" class="btn btn-danger btn-xs">Delete</a></td>

                            </form>
                              @endcan
                          </tr>
                          @endforeach
                          
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>SubTitle</th>
                            <th>Slug</th>
                            <th>Created At</th>
                              @can('posts.update', Auth::user())
                            <th>Edit</th>
                            @endcan
                            @can('posts.delete', Auth::user())
                            <th>Delete</th>
                            @endcan
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