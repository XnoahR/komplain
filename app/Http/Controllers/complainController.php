<?php

namespace App\Http\Controllers;

use App\Models\Komplain;
use App\Models\Riwayat_pembelian_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class complainController extends Controller
{
    //
    function index()
    {
        $user = Auth::user();
        $product = Riwayat_pembelian_barang::where('id_user', $user->id)->get();
        return view('user.complaint.komplain', [
            'title' => 'Complaint',
            'product' => $product,
        ]);
    }

    function unsolved()
    {
        $user = Auth::user();
        $complaints = Komplain::where('id_user', $user->id)
                      ->whereIn('status', [1,2,3])
                      ->get();
        $products = collect();

        foreach ($complaints as $complaint) {
            $product = Riwayat_pembelian_barang::find($complaint->id_rpb);

            if ($product) {
                $products[] = $product->name;
            }
        }

        return view('user.complaint.unsolved', [
            'title' => 'Unsolved',
            'complaint' => $complaints,
            'products' => $products,
        ]);
    }
    
    function solved()
    {
        $user = Auth::user();
        $complaints = Komplain::where('id_user', $user->id)
                      ->whereIn('status', [4, 5])
                      ->get();
        $products = collect();

        foreach ($complaints as $complaint) {
            $product = Riwayat_pembelian_barang::find($complaint->id_rpb);

            if ($product) {
                $products[] = $product->name;
            }
        }
        return view('user.complaint.solved', [
            'title' => 'Solved',
            'complaint' => $complaints,
            'products' => $products,
        ]);
    }

    function all()
    {
        return view('user.all', [
            'title' => 'All Complaint'
        ]);
    }
    function statistics()
    {
        return view('user.statistics', [
            'title' => 'Statistics'
        ]);
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required',
            'complaint_type' => 'required',
            'product' => 'required',
            'description' => 'required|max:255'
        ], [
            'subject.required' => 'Fill the subject form!',
            'complaint_type' => 'Choose the complaint type!',
            'product.required' => 'Choose your product!',
            'descriptip.required' => 'Fill the description form!',
            'description.max' => 'Max letter 255',
        ]);

        if (!$validated) {
            return redirect()->back()->with('error', 'Complaint failed to send');
        }
        $user = Auth::user();
        $complaint = new Komplain();
        $complaint->id_user = $user->id;
        $complaint->id_admin = $validated['complaint_type'];
        $complaint->id_rpb = $validated['product'];
        $complaint->subject = $validated['subject'];
        $complaint->description = $validated['description'];
        $complaint->status = 1;
        $complaint->date_send = now();
        $complaint->created_at = now();
        $complaint->save();

        return redirect()->route('complaint')->with('success', 'Request is Successfully send!');
    }

    function destroy($id)
    {
        $complaint = Komplain::find($id);
        $complaint->delete();

        return redirect()->back()->with('success', 'Request Cancelled');
    }
}
