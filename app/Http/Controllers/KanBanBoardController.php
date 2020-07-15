<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KanBanBoardController extends Controller
{
    public function index()
    {


        return view ('kabanBoard.index');


    }
}
