@extends('admin.app')

@section('headSection')
<link rel="stylesheet" href="{{asset('admin/select2/dist/css/select2.min.css')}}">
@endsection
@section('activePost','text-success')
@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      Text Editors
	      <small>Advanced form element</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="#">Forms</a></li>
	      <li class="active">Editors</li>
	    </ol>
	  </section>
		<div class="box box-primary">
		  <div class="box-header with-border">
		    <h3 class="box-title">Blogs Title</h3>
		  </div>
		  <!-- /.box-header -->
				
		  @include('includes\message')
		  <!-- form start -->
		  <form role="form" method="post" action="{{ route('post.update',$post->id) }}" 
		  	enctype="multipart/form-data">
		  	{{ csrf_field() }}
		  	{{method_field("PATCH")}}
		    <div class="box-body">
		  <div class="col-lg-6">
		      <div class="form-group">
		        <label for="title">Title</label>
		        <input type="text" class="form-control" id="title" name="title" placeholder="Title for post" value="{{ $post->title }}">
		      </div>
		      <div class="form-group">
		        <label for="subtitle">Subtitle</label>
		        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle for post" value="{{ $post->subtitle }}">
		      </div>
		      <div class="form-group">
		        <label for="slug">Slug</label>
		        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
		      </div>

		  </div>
		  <div class="col-lg-6">
		  	<div class="form-group">
		        <label for="image">Select Image</label>
		        <input type="file" id="image" name="image">
		      </div>
		      <div class="form-group" style="margin-top:25px;">
		      	<label>Select Category</label>
		      	<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select one or more category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
		      		@foreach ($categories as $category)
		      		<option value="{{$category->id}}" 
		      			@foreach($post->categories as $postCategory)
		      			@if ($postCategory->id == $category->id)
		      			selected
		      			@endif		
		      			@endforeach	
		      			>{{$category->name}}</option>
		      			@endforeach
		      		</select>
		      	</div>
              <div class="form-group" style="margin-top:20px;">
                <label>Select Tag</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select one or more Tag" style="width: 100%;" tabindex="-1" aria-hidden="true"name="tags[]">
                  @foreach ($tags as $tag)
                  	<option value="{{$tag->id}}" 
						@foreach($post->tags as $postTag)
		      			@if ($postTag->id == $tag->id)
		      			selected
		      			@endif
		      			@endforeach>
		      			{{$tag->name}}
		      		</option>
                  @endforeach
                </select>
              </div>

		     </div>
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="box box-info">
	          <div class="box-header">
	            <h3 class="box-title">Body
	              <small>of a blog</small>
	            </h3>
	            <!-- tools box -->
	           
	            <!-- /. tools -->
	          </div>
	          <!-- /.box-header -->
	          <div class="box-body pad">
	          
	                  <textarea id="editor1" name="body" rows="10" cols="80">
	                          {{ $post->body }}                
	                  </textarea>
	          
	          </div>
	        </div>
	        <!-- /.box -->
	      </div>
	      <!-- /.col-->
	  		  <div class="col-lg-12 checkbox">
		        <label>
		          <input type="checkbox" name="status" value="1" @if($post->status == 1) checked @endif> Check to publish
		        </label>
		      </div>
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
			<div class="form-group">
		    
		    	<div class="col-lg-12">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    		
		    	
		    </div>
			</div>	
		    </div>
		    <!-- /.box-body -->
				
	  <!-- Main content -->
		  </form>
		  
		</div>
	</div>
	<!-- /.content-wrapper -->


@endsection
@section('footerSection')
<script src="{{asset('admin/select2/dist/js/select2.full.min.js')}}"></script>
	<!-- CK Editor -->
   <script>
   	$(document).ready(function(){
   		 $('.select2').select2();
   	});
   </script>
	{{-- for offline purpose ck editor --}}
		<!--<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script> -->
		<script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
	<script>
	  $(function () {
	    // Replace the <textarea id="editor1"> with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace('editor1')
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5()
	  })
	</script>

@endsection