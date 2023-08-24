<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
// use App\Http\Controllers\Payment\TripayController;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;

// use function PHPUnit\Framework\isEmpty;
// use function PHPUnit\Framework\isNull;

class TransactionController extends Controller
{
    //
    public function index(){
        // dd()
        $pending = Transaction::where('status', 'pending')->get();
        // dd(empty($pending));
        if ($pending->count() == 0) {
            # code...
            Alert::error('Management tak bisa dibuka','Tunggu Konsumen memberikan bukti Pembayaran');
            return redirect('/');
        }
        return view('transaction.management', compact('pending'));
    }
    public function history(){
        $history = Transaction::where('user_id', Auth::user()->id)->where('total_price','!=',0)->paginate(5);
        // dd($history->count());
        if ($history->count() == 0) {
            # code...
            Alert::error('History tak bisa dibuka','Harap Menambahkan Cart dan Melakukan Konfirmasi Pembayaran');
            return redirect('/');
        }
        return view('transaction.history', [
            'transactions' => $history
        ]);
    }
    
    public function checkout($id){
        $pesanan = Transaction::where('id', $id)->where('status', 'pending')->first();
        // dd($pesanan);
        if ($pesanan->proof_image != null) {
            # code...
            $path = 'image-product/'.$pesanan->proof_image;
            Storage::disk('public')->delete($path, $pesanan->proof_image);
            $pesanan->status = 'paid';
            $pesanan->proof_image = null;
            // dd($pesanan);
            $pesanan->update();
            Alert::success('Checkout Berhasil','Silahkan Lakukan Aktivitas');
            return redirect()->back();
        }else{
            Alert::error('Checkout Berhasil','Silahkan Lakukan Aktivitas');
            return redirect()->back();
        }
    }
    
    public function getconfirmation($id){
        $detail = Transaction::find($id);
        // dd(isset($detail->status));
        if(is_null($detail) || ($detail->status != 'unpaid') || ($detail->user_id != Auth::user()->id)){
            return redirect('/');
        }
        return view('transaction.getconfirmation', compact('detail')); 
        
    }
    
    public function geteditconfirmation($id){
        $detail = Transaction::find($id);
        if(is_null($detail) || ($detail->status != 'pending') || ($detail->user_id != Auth::user()->id)){
            return redirect('/');
        }
        return view('transaction.geteditconfirmation', compact('detail')); 
        
    }
    
    public function confirmation($id, Request $request){
        $confirmation = Transaction::find($id);
        // dd($confirmation);

        $validatedData = $request->validate([
            'image' =>'required|image|file',
        ]);
        
        $image = $request->file('image');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = 'image-product/'.$filename;
        
        Storage::disk('public')->put($path,file_get_contents($image));
        $validatedData['image'] = $filename;
        
        $confirmation->update([
            'status' => 'pending',
            'proof_image' => $validatedData['image'],
        ]);
        
        Alert::success('Upload Image Berhasil','Silahkan Cek status Pembayaran melalui Menu History');
        return redirect()->back();
    }
    
    public function updateconfirmation($id, Request $request) {
        $transaction = Transaction::find($id);
        // dd($transaction);
        $validatedData = $request->validate([
            'image' =>'required|image|file',
        ]);
        if ($request->file('image')) {
            if ($transaction->image != null) {
                # code...
                $path = 'image-product/'.$transaction->image;
                Storage::disk('public')->delete($path, $transaction->image);
                // dd($transaction->image);
            }
            $image = $request->file('image');
            $filename = date('Y-m-d').$image->getClientOriginalName();
            $path = 'image-product/'.$filename;
            
            Storage::disk('public')->put($path,file_get_contents($image));
            $validatedData['image'] = $filename;
            
            $transaction->update([
                'proof_image' => $validatedData['image'],
            ]);
            Alert::success('Upload lagi Image Berhasil','Silahkan tetap Cek status Pembayaran melalui Menu History');
            return redirect()->back();
        }
    }
    
    public function show($id) {
        $carts = Cart::where('transaction_id', $id)->get();
        $transaction = Transaction::find($id);

        if ($carts->count() == 0) {
            # code...
            return redirect('/');
        }
        if (($transaction->user_id != Auth::user()->id) && Auth::user()->role == 'member') {
            # code...
            return redirect('/');
        }
            $transaction = Transaction::find($id)->first();
            return view('transaction.show', compact('carts', 'transaction'));
    }
    
}