<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    function register(){
        return view('user.session.register',[
            'title' => 'register',
            'active' => 'register',
        ]);
    }

    function create(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Fill the name form box!',
            'email.required' => 'Fill the email form box!',
            'email.email' => 'Use the valid email!',
            'email.unique' => 'Email is already used!',
            'password.required' => 'Fill the password form box!',
            'password.min' => 'Minimal password 8 letters!'
        ]);

        $registerinfo = [
            'name' => $credentials['name'],
            'email' => $credentials ['email'],
            'password' => Hash::make($credentials ['password']),
            'role' => 'user'
        ];
        User::create($registerinfo);

        return redirect()->route('login_page')->with('success','Account Created!');
    }
}
