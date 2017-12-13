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
    <form role="form" action="{{ route('tag.update',$tag->id) }}" method="post">
      {{ csrf_field() }}
      {{method_field('PATCH')}}
   <div class="box-body">
    <div class="col-lg-12">
        <div class="form-group">
          <label for="tag">Name of Tag</label>
          <input type="text" class="form-control" id="tag" name="name" placeholder="Tag of post" value="{{$tag->name}}">
        </div>

        <div class="form-group">
          <label for="slug">Slug for Tag</label>
          <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug for tag" value="{{$tag->slug}}">
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