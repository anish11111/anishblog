@extends('user/app')
@section('bg-img',Storage::disk('local')->url($post->image))
@section('heading',$post->title)
@section('sub-heading',$post->subtitle)
@section('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=124583738257168';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
	<article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small ><mark>Post Created : {{$post->created_at->diffforhumans()}}</mark></small>
            @foreach ($post->categories as $category) 
              <small class="pull-right">
                <a href="{{route('category',$category->slug)}}"><mark> {{$category->name}}</mark></a>&nbsp&nbsp
              </small>
            @endforeach
            {!! htmlspecialchars_decode($post->body)!!}
            <h4>Tag Clouds</h4>
             @foreach ($post->tags as $tag) 
              <small class="pull-left">
                <a href="{{route('tag',$tag->slug)}}"><mark> {{$tag->name}}</mark></a>&nbsp&nbsp
              </small>
            @endforeach
          </div>
        <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
        </div>
      </div>
    </article>

    <hr>
@endsection