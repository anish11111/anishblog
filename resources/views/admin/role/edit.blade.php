@extends('admin.app')
@section('activeRole','text-success')
@section('main-content')
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Role</h3>
    </div>
    <!-- /.box-header -->
    @include('includes\message')
    <!-- form start -->
    <form role="form" action="{{ route('role.update',$role->id) }}" method="post">
      {{ csrf_field() }}
      {{method_field('PATCH')}}
   <div class="box-body">
    <div class="col-lg-12">
        <div class="form-group">
          <label for="role">Role</label>
          <input type="text" class="form-control" id="role" name="name" placeholder="Role of Admins" value="{{$role->name}}">
        </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-4">
                      <label>Post permissions</label>
                        
                      @foreach($permissions as $permission)
                   @if($permission->for == 'post')
                      <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}" name="permission[]" 

                      @foreach($role->permissions as $role_permit)

                      @if($role_permit->id == $permission->id)
                      checked
                      @endif

                      @endforeach

                      >{{$permission->name}}</label>
                      </div>
                   @endif
                  @endforeach
                    </div>
                    <div class="col-lg-4">
                      <label>User permissions</label>
                        
                      @foreach($permissions as $permission)
                   @if($permission->for == 'user')
                      <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}" name="permission[]"
                      @foreach($role->permissions as $role_permit)

                      @if($role_permit->id == $permission->id)
                      checked
                      @endif

                      @endforeach>{{$permission->name}}</label>
                      </div>
                   @endif
                  @endforeach
                    </div>
                    <div class="col-lg-4">
                      <label>Other permissions</label>
                        
                      @foreach($permissions as $permission)
                   @if($permission->for == 'other')
                      <div class="checkbox">
                    <label><input type="checkbox" value="{{$permission->id}}" name="permission[]"
                      @foreach($role->permissions as $role_permit)

                      @if($role_permit->id == $permission->id)
                      checked
                      @endif

                      @endforeach>{{$permission->name}}</label>
                      </div>
                   @endif
                  @endforeach
                    </div>
                    
                  </div>
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