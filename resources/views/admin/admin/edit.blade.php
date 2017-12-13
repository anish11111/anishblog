@extends('admin.app')
@section('activeAdm','text-success')
@section('main-content')
<div class="content-wrapper">
 	<div class="box box-primary">
 	  <div class="box-header with-border">
 	    <h3 class="box-title">Edit Admin</h3>
 	  </div>
 	  <!-- /.box-header -->
 	  @include('includes\message')
 	  <!-- form start -->
 	  <form role="form" action="{{ route('admin.update',$admin->id) }}" method="post">
 	  	{{ csrf_field() }}
 	  	{{method_field('PUT')}}
 	 <div class="box-body">
 	  <div class="col-lg-12">
 	      <div class="form-group">
 	        <label for="tag">Name of Admin</label>
 	        <input type="text" class="form-control" id="tag" name="name" placeholder="Name here..." value="@if(old('name')){{old('name')}} @else{{$admin->name}} @endif">
 	      </div>

 	      <div class="form-group">
 	        <label for="email">Email</label>
 	        <input type="text" class="form-control" id="email" name="email" placeholder="Email here..." value="@if(old('email')){{old('email')}} @else{{$admin->email}} @endif">
 	      </div>
 	      <div class="form-group">
 	        <label for="phone">Phone number</label>
 	        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone no here..." value="@if(old('phone')){{old('phone')}} @else{{$admin->phone}} @endif">
 	      </div>

 	      <div class="form-group">
 	        <label for="status">Confirm Status</label>
 	        <div class="checkbox">
 	           <label ><input type="checkbox" name="status" value="1" @if(old('status')==1 || $admin->status==1) checked @endif>Status</label>
 	        </div>
 	      </div>
			
			<div class="form-group">
			<label>Assign Role</label>
			<div class="row">

			  @foreach($roles as $role)
				<div class="col-lg-1">
					<div class="checkbox">
					 	<label ><input type="checkbox" name="role[]" value="{{$role->id}}"
					 		@foreach( $admin ->roles as $admin_role)
						 		@if($admin_role->id == $role->id)
						 			checked
						 		@endif
					 		@endforeach>{{$role->name}}</label>
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