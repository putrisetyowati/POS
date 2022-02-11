<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RopController extends Controller
{
    public function index (){
        return view ('ROP.index');
    }
}
