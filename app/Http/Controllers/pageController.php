<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        $posts = Post::all();
        //$posts = post::first();
        //$posts = post::find(1);
        //dd($posts);
        return view('blog',compact('posts'));
    }
    public function post(post $post)
    {
        return view('post',['post'=>$post]);
    }
}
