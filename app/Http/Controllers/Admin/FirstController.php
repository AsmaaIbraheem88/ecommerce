<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    public  function __construct(){

        $this->middleware('auth')->except('show');
    }

    public  function  show(){

        return"helo";
    }
}
