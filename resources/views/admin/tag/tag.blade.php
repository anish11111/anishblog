@extends('admin.app')
@section('activeTag','text-success')
@section('main-content')
<div class="content-wrapper">
 	<div class="box box-primary">
 	  <div class="box-header with-border">
 	    <h3 class="box-title">Blogs Tag</h3>
 	  </div>
 	  <!-- /.box-header -->
 	  @include('includes\message')
 	  <!-- form start -->
 	  <form role="form" action="{{ route('tag.store') }}" method="post">
 	  	{{ csrf_field() }}
 	 <div class="box-body">
 	  <div class="col-lg-12">
 	      <div class="form-group">
 	        <label for="tag">Name of Tag</label>
 	        <input type="text" class="form-control" id="tag" name="name" placeholder="Tag of post">
 	      </div>

 	      <div class="form-group">
 	        <label for="slug">Slug for Tag</label>
 	        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug for tag">
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