<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.profile',[
            'user' => $user,
            'title' => 'Profile',
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
        $users->password = $request->password;
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
    public function show( $id_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id_user)
    {
        $user = User::find($id_user);
        return view('user.edit',[
            'users' => $user,
            'title' => "Change"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
         //Validasi Data
         $validated = $request -> validate([
            'name'=>'required|min:3',
            // 'password'=>'required|min:5|max:25',
            'email'=>'required|email',
            'phone' => 'required|min:12|max:15',
            'gender' => 'nullable',
            'born' =>'nullable',
            'profile_picture' => 'nullable'
        ]);
        //Input Data
        $user = User::Find($id);
        if($request->hasFile('profile_picture')){
            $fileName = time().'_'.$request->file('profile_picture')->getClientOriginalName(); //Memberi Nama file yang diupload
            $request->file('profile_picture')->move(public_path('profile_photos'),$fileName); //Memindah file ke folder profile_photo dengan nama file $fileName
            $filePath = 'profile_photos/'.$fileName;//Mendefinisikan letak file 
            $validated['profile_picture'] = $filePath; //Ubah nama file menjadi letak file
        }
        else{
            $validated['profile_picture'] = $user->foto_profil;
        }
        $user->name = $validated['name'];
        // $user->password = $validated['password'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->gender = $validated['gender'];
        $user->born = $validated['born'];
        $user->roles = '1';
        $user->save();

        return redirect('profile')->with('success','Data berhasil diganti!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id_user)
    {
        //
        $user = User::find($id_user);
        $user->delete();

        return redirect('/user');
    }
}
