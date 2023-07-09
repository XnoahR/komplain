<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.session.index',[
            'title' => 'Login'
        ]);
    }

    function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $logininfo = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ];
        if(Auth::attempt($logininfo)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with('success','Login Success');
        }else{
            return back()->with('loginError','Login Failed!');
        }
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login_page')->with('success','Logout Success!');
    }
}
