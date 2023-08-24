<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TripayCallbackController extends Controller
{
    // Isi dengan private key anda
    
    protected $privateKey = 'lxBcg-jw96J-IUKAW-r26kk-3AvfZ';
    
    public function handle(Request $request)
    {
        // dd('sultan');
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->privateKey);
        
        if ($signature !== (string) $callbackSignature) {
            return Response::json([
                'success' => false,
                'message' => 'Invalid signature',
            ]);
        }
        
        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return Response::json([
                'success' => false,
                'message' => 'Unrecognized callback event, no action was taken',
            ]);
        }
        
        $data = json_decode($json);
        
        if (JSON_ERROR_NONE !== json_last_error()) {
            return Response::json([
                'success' => false,
                'message' => 'Invalid data sent by tripay',
            ]);
        }
        // $invoiceId = $data->merchant_ref;
        $reference = $data->reference;
        $status = strtoupper((string) $data->status);
        
        if ($data->is_closed_payment === 1) {
            $transaction = Transaction::where('reference', $reference)
            // ->where('tripay_reference', $reference)
            ->where('status', '=', 'UNPAID')
            ->first();
            
            if (!$transaction) {
                return Response::json([
                    'success' => false,
                    'message' => 'No invoice found or already paid: ' . $reference,
                ]);
            }
            
            switch ($status) {
                case 'PAID':
                    $transaction->update(['status' => 'PAID']);
                    break;
                    
                    case 'EXPIRED':
                        $transaction->update(['status' => 'UNPAID']);
                        break;
                        
                        case 'FAILED':
                            $transaction->update(['status' => 'UNPAID']);
                            break;
                            
                            default:
                            return Response::json([
                                'success' => false,
                                'message' => 'Unrecognized payment status',
                            ]);
                        }
                        
                        return Response::json(['success' => true]);
                    }
                }
            }