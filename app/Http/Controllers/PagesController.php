<?php
/**
 * Created by PhpStorm.
 * User: diwakar
 * Date: 12/11/18
 * Time: 4:25 PM
 */

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{

    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages/welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Diwakar';
        $last = 'Sharma';

        $fullname = $first." ".$last;
        $email = 'diwakarsharma95@gmail.com';

        return view('pages/about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact(){
        return view('pages/contact');
    }

}