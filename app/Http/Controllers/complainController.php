<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class complainController extends Controller
{
    //
    function index(){
        return view('user.komplain',[
            'title' => 'Complaint',
        ]);
    }

    function unsolved(){
        return view('user.unsolved',[
            'title' => 'Unsolved Complaint',
            'Active' => 'Unsolved',
        ]);
    }
    function solved(){
        return view('user.solved',[
            'title' => 'Solved Complaint',
            'Active' => 'Solved',
        ]);
    }

    function all(){
        return view('user.all',[
            'title' => 'All Complaint'
        ]);
    }
    function statistics(){
        return view('user.statistics',[
            'title' => 'Statistics'
        ]);
    }
}
