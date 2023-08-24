<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

// use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaction = Transaction::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first();
        if (empty($transaction) || empty($transaction->total_price)) {
            # code...
            Alert::error('Masuk Cart Gagal','Harap Masukkan Cart yang akan dibeli');
            return redirect('/');
        }
        return view('cart.carts', [
            'carts'=> Cart::where('transaction_id', $transaction->id)->get(),
            'transaction' => $transaction
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::where('id', $request->pid)->first();
        $tanggal = Carbon::now();
        // dd($product, $tanggal);

        $cek_pesanan= Transaction::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first();
        // dd($cek_pesanan);
        if (empty($cek_pesanan)) {
            # code...
            $pesanan = new Transaction;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            // $pesanan->status = 0; //buat checkout
            $pesanan->total_price = 0;
            $product->price*$request->quantity;
            // $pesanan->kode = mt_rand(100,999); //buat kode pay
            $pesanan->save();
        }
        
        $pesanan_baru = Transaction::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first();
        $cek_pesanan_detail = Cart::where('product_id', $product->id)->where('transaction_id',$pesanan_baru->id)->first();
        // dd($cek_pesanan_detail);
        if(empty($cek_pesanan_detail)){
            $pesanan_detail = new Cart;
            $pesanan_detail->product_id = $product->id;
            $pesanan_detail->transaction_id = $pesanan_baru->id;
            $pesanan_detail->quantity = $request->quantity;
            $pesanan_detail->total_price = $product->price*$request->quantity;
            $pesanan_detail->save();      
        }else{
            $pesanan_detail = Cart::where('product_id', $product->id)->where('transaction_id',$pesanan_baru->id)->first();
            $pesanan_detail->quantity += $request->quantity;
            $pesanan_detail->total_price = $product->price * $pesanan_detail->quantity;
            $pesanan_detail->update();
        }

        $pesanan = Transaction::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first();
        $pesanan->total_price = $pesanan->total_price + $product->price *$request->quantity;
    	$pesanan->update();


        return back()->with('success', 'Sukses Menambahkan Cart');
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
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
        $pesanan_detail = Cart::where('id', $cart->id)->first();
        // dd($pesanan_detail);
        $pesanan = Transaction::where('id', $pesanan_detail->transaction_id)->first();
        $pesanan->total_price = $pesanan->total_price - $pesanan_detail->total_price;
        $pesanan->update();

        $pesanan_detail->delete();
        return back()->with('success', 'Cart sukses dihapus');
    }
}