<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;


class WelcomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $ip = Request::ip();
        $infos = Session::getId();
        return "Votre ip est $ip <br> Votre session est $infos";

    }
}
