<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getIndex(){
        $post = Post::paginate(10);
        return view('blog.index')->withPosts($post);
    }
    public function getSingle($slug){
        //fetch from the database based on slug
        $post = Post::where('slug','=',$slug)->first();

        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
