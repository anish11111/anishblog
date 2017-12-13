@extends('admin.app')
@section('activeCat','text-success')
@section('main-content')
<div class="content-wrapper">
 	<div class="box box-primary">
 	  <div class="box-header with-border">
 	    <h3 class="box-title">Blogs Category</h3>
 	  </div>
 	  <!-- /.box-header -->
 	  @include('includes\message')
 	  <!-- form start -->
 	  <form role="form" action="{{ route('category.update',$category->id) }}" method="post">
 	  	{{ csrf_field() }}
 	  	{{method_field("PATCH")}}
 	 <div class="box-body">
 	  <div class="col-lg-12">
 	      <div class="form-group">
 	        <label for="category">Name of Category</label>
 	        <input type="text" class="form-control" id="category" name="name" placeholder="Category of post" value="{{$category->name}}">
 	      </div>

 	      <div class="form-group">
 	        <label for="slug">Slug for category</label>
 	        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"  value="{{$category->slug}}">
 	      </div>

 	  </div>
 	 	<div class="form-group">	
		      <button type="submit" class="btn btn-primary">Submit</button>
		</div>	
       </div>
       <!-- /.col-->
		    		
 	  </form>
</div>
 </div>
@endsection