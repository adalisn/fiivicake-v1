<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripayController extends Controller
{
    //
    public function getPaymentChannels(){
        
        $apiKey = config('tripay.api_key');
        // dd($apiKey);
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/merchant/payment-channel',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));
        
        $response = curl_exec($curl);
        $error = curl_error($curl);
        
        curl_close($curl);
        $response = json_decode($response)->data;
        // dd(json_decode($response)->data);
        
        return $response? $response : $error;
        
    }
    
    public function requestTransation($method, $transaction){
        
        $apiKey       = config('tripay.api_key');
        $privateKey   = config('tripay.private_key');
        $merchantCode = config('tripay.merchant_code');
        // dd($apiKey, $privateKey, $merchantCode);
        $merchantRef  = 'PX-' .time(); //gak wajib, 
        // $amount       = 1000000;
        
        $user = Auth::user();
        # code...
        $data = [
            'method'         => $method,
            'merchant_ref'   => $merchantRef,
            'amount'         => $transaction->total_price,
            'customer_name'  => $user->id,
            'customer_email' => $user->email,
            // 'customer_phone' => '081234567890'
            
            'order_items'    => [],
            // 'return_url'   => 'https://domainanda.com/redirect',
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$transaction->total_price, $privateKey)
        ];
        // dd($data['order_items'][2]);
        // $transaction = Transaction::where('status', 1)
        $cart = Cart::where('transaction_id', $transaction->id)->get();
        // $m = 0;
        
        foreach ($cart as $key => $c) {
            $data['order_items'][$key]['name'] = $c->product->name;
            $data['order_items'][$key]['price'] = $c->product->price;
            $data['order_items'][$key]['quantity'] = $c->quantity;
            // $data['order_items'][$key]['customer_phone'] = '081234567890';
        }
        // dd($data['amount'],$data['order_items']);
        
        
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);
        
        $response = curl_exec($curl);
        $error = curl_error($curl);
        
        curl_close($curl);
        $response = json_decode($response)->data;
        
        // dd($response);
        
        return $response? $response : $error;        
    }
    
    public function detailTransaction($reference) {
        
        $apiKey = config('tripay.api_key');
        
        $payload = ['reference'	=> $reference];
        
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/detail?'.http_build_query($payload),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);
        
        $response = curl_exec($curl);
        $error = curl_error($curl);
        
        curl_close($curl);
        $response = json_decode($response)->data;
        // dd($response);
        
        return $response? $response : $error;
    
    }
}