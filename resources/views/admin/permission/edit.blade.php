@extends('admin.app')
@section('activePer','text-success')
@section('main-content')
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Permission</h3>
    </div>
    <!-- /.box-header -->
    @include('includes\message')
    <!-- form start -->
    <form role="form" action="{{ route('permission.update',$permission->id) }}" method="post">
      {{ csrf_field() }}
     {{method_field('PATCH')}}
   <div class="box-body">
    <div class="col-lg-12">
        <div class="form-group">
          <label for="permission">Permission</label>
          <input type="text" class="form-control" id="permission" name="name" placeholder="Permission for admin" value="{{$permission->name}}">
        </div>
        <div class="form-group">
          <label for="for">Permission For</label>
          <select id="for" name="for">
            <option selected disabled>Select Permission For</option>
            <option value="user">User</option>
            <option value="post">Post</option>
            <option value="other">Other</option>
          </select>
        </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>  

    </div>
      </div>
       <!-- /.col-->
        
    </form>
    
  </div>
 </div>
@endsection