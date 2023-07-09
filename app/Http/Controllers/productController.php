<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Riwayat_pembelian_barang;

class productController extends Controller
{
    //
    function index(){
        $user = Auth::user();
        $products = Riwayat_pembelian_barang::where('id_user', $user->id)->get();
        return view('user.product.index',[
            'title' => 'Product',
            'products' => $products,
        ]);
    }

    function create(){
        return view('user.product.create',[
            'title' => 'Product',

        ]);
    }

    function store(Request $request){
        $validated = $request->validate([
            'name' => ['required','string'],
            'price' => 'required',
            'amount' => 'required',
            'brand' =>'required',
            'warranty' =>'required',
            'buy_date' =>'required',
            'struct' =>'required',
        ],[
            'name.required' => 'Fill the product name!',
            'price.required' => 'Fill the product price!',
            'amount.required' => 'Fill the product amount!',
            'brand.required' => 'Fill the product brand!',
            'warranty.required' => 'Fill the product warranty!',
            'buy_date.required' => 'Fill the product buy date!',
            'struct.required' => 'Fill the product struct!',
        ]);

        if(!$validated){
            return redirect()->back()->with('error','Create Failed');
        }
        //Store File
        if($request->hasFile('struct')){
            $fileName = time().'_'.$request->file('struct')->getClientOriginalName(); //Memberi Nama file yang diupload
            $request->file('struct')->move(public_path('struct_file'),$fileName); //Memindah file ke folder profile_photo dengan nama file $fileName
            $filePath = 'struct_file/'.$fileName;//Mendefinisikan letak file 
            $validated['struct'] = $filePath; //Ubah nama file menjadi letak file
        }
        $user = Auth::user();
        $product = new Riwayat_pembelian_barang();
        $product->id_user =$user->id;
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->amount = $validated['amount'];
        $product->brand = $validated['brand'];
        $product->warranty = $validated['warranty'];
        $product->buy_date = $validated['buy_date'];
        $product->struct = $validated['struct'];
        $product->created_at = now();
        $product->save();

        return redirect()->route('product')->with('success', 'Product Created!');
    }

    function edit(Riwayat_pembelian_barang $product){
        return view('user.product.edit',[
            'title' => 'Product',
            'product' => $product,
        ]);
    }

    function update(Request $request, $id){
        //
         //Validasi Data
         $validated = $request->validate([
            'name' => ['required','string'],
            'price' => 'required',
            'amount' => 'required',
            'brand' =>'required',
            'warranty' =>'required',
            'buy_date' =>'required',
            'struct' =>'nullable',
        ],[
            'name.required' => 'Fill the product name!',
            'price.required' => 'Fill the product price!',
            'amount.required' => 'Fill the product amount!',
            'brand.required' => 'Fill the product brand!',
            'warranty.required' => 'Fill the product warranty!',
            'buy_date.required' => 'Fill the product buy date!',
           
        ]);
        //Input Data
        $product = Riwayat_pembelian_barang::Find($id);
        if($request->hasFile('struct')){
            $fileName = time().'_'.$request->file('struct')->getClientOriginalName(); //Memberi Nama file yang diupload
            $request->file('struct')->move(public_path('struct_file'),$fileName); //Memindah file ke folder profile_photo dengan nama file $fileName
            $filePath = 'struct_file/'.$fileName;//Mendefinisikan letak file 
            $validated['struct'] = $filePath; //Ubah nama file menjadi letak file
        }
        else{
            $validated['struct'] = $product->struct;
        }
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->amount = $validated['amount'];
        $product->brand = $validated['brand'];
        $product->warranty = $validated['warranty'];
        $product->buy_date = $validated['buy_date'];
        $product->struct = $validated['struct'];
        $product->updated_at = now();
        $product->save();

        return redirect()->route('product')->with('success', 'Product Updated!');
    }

    function destroy($id){
        $product = Riwayat_pembelian_barang::find($id);
        $product->delete();
        return redirect()->route('product')->with('success', 'Product Deleted!');
    }
}
