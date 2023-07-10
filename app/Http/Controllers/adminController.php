<?php

namespace App\Http\Controllers;

use App\Models\Komplain;
use App\Models\Riwayat_pembelian_barang;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
      $complaints = Komplain::all();
      $products = [];

        foreach ($complaints as $complaint) {
            $product = Riwayat_pembelian_barang::find($complaint->id_rpb);

            if ($product) {
                $products[] = $product->name;
            }
        }
        return view('user.admin.index',[
            'title' => 'Data',
            'complaint' => $complaints,
            'products' => $products,
        ]);
    }

    function role(){
        $user = User::where('role', 2)->get();

        return view('user.admin.role',[
            'title' => 'Role Management',
            'users' => $user,
        ]);
    }

    function update(Request $request,$id){
        $request->validate([
            'role_penugasan' => 'required',

        ]);

        $user = User::find($id);
        $user->role_penugasan = $request->input('role_penugasan');
        $user->save();

        return redirect()->back()->with('success','Role Updated!');
    }
    //
}

