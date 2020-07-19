<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();

       // dd($posts);
        return view('post.index')->with(array('posts'=>$posts));
    }
    public function show(){
        return view('post.add');

    }
    public function create(){
        return view('post.add');
    }
    public function edit (){
        return view('post.add');
    }
    public function store(){
        return view('post.add');
    }


}
