<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
class PostController extends Controller
{
/* function with eager loading afai..  
  public function post($slug)
    {
    	$post = post::with('tags','categories')->where('slug',$slug)->first();
    	return view('user.post',compact('post'));
    }
*/
    /*function with route model binding and on its view lazy loading is being done*/
    public function post(post $post)
    {
    	return view('user.post',compact('post'));
    }
}
