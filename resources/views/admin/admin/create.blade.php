@extends('admin.app')
@section('activeAdm','text-success')
@section('main-content')
<div class="content-wrapper">
 	<div class="box box-primary">
 	  <div class="box-header with-border">
 	    <h3 class="box-title">Create Admins</h3>
 	  </div>
 	  <!-- /.box-header -->
 	  @include('includes\message')
 	  <!-- form start -->
 	  <form role="form" action="{{ route('admin.store') }}" method="post">
 	  	{{ csrf_field() }}
 	 <div class="box-body">
 	  <div class="col-lg-12">
 	      <div class="form-group">
 	        <label for="tag">Name of Admin</label>
 	        <input type="text" class="form-control" id="tag" name="name" placeholder="Name here..." value="{{old('name')}}">
 	      </div>

 	      <div class="form-group">
 	        <label for="email">Email</label>
 	        <input type="text" class="form-control" id="email" name="email" placeholder="Email here..." value="{{old('email')}}">
 	      </div>
 	      <div class="form-group">
 	        <label for="password">Password</label>
 	        <input type="password" class="form-control" id="password" name="password" placeholder="Password here..." value="{{old('password')}}">
 	      </div>
 	      <div class="form-group">
 	        <label for="password_confirmation">Confirm password</label>
 	        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password here...">
 	      </div>

 	      <div class="form-group">
 	        <label for="phone">Phone number</label>
 	        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone no here..." value="{{old('phone')}}">
 	      </div>

 	      <div class="form-group">
 	        <label for="status">Confirm Status</label>
 	        <div class="checkbox">
 	           <label ><input type="checkbox" name="status" value="1" @if(old('status')) checked @endif>Status</label>
 	        </div>
 	      </div>
			
			<div class="form-group">
			<label>Assign Role</label>
			<div class="row">

			  @foreach($roles as $role)
				<div class="col-lg-1">
					<div class="checkbox">
					 	<label ><input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
					</div>
					
				</div>
			  @endforeach
					
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