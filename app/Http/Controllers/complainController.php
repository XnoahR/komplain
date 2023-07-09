<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class complainController extends Controller
{
    //
    function index(){
        return view('user.komplain',[
            'title' => 'Komplain',
        ]);
    }
}
