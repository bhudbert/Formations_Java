<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanboardController extends Controller
{
    public function index()
    {
        return view ('kanboard.index');
    }

    function example(){
        return view('kanboard.example');
    }
    function store(){
        return view('kanboard.store');
    }

    function show(int $idBoard){
        return view('kanboard.show');
    }
    function  update(int $idBoard){
        return view('kanboard.update');
    }
    function  delete(int $idBoard){
        return view('kanboard.delete');
    }
}
