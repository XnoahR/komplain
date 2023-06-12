<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index',[
            'users' => User::all(),
            'title' => 'user',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.create',[
            'title'=>'Add',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Validasi Data
        $request -> validate([
            'nama'=>'required|min:3',
            'password'=>'required|min:5|max:25',
            'email'=>'required|min:6',
            'nohp' => 'required|min:12|max:15',
            'jenis_kelamin' => 'required|min:1|max:1',
            'tgl_lahir' =>'required',

        ]);
        //Input Data
        $users = new user;
        $users->nama = $request->nama;
        $users->password = bcrypt($request->password);
        $users->email = $request->email;
        $users->nohp = $request->nohp;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->tgl_lahir = $request->tgl_lahir;
        $users->roles = '1';
        $users->save();

        return to_route('user.index')->with('success','Data berhasil ditambah!'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
