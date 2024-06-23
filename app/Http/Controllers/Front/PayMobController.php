<?php

namespace App\Http\Controllers\Front;

use App\Enums\PaymentStatus;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nafezly\Payments\Classes\PaymobPayment;

class PayMobController extends Controller
{
    public function payWithPaymob(Request $request, Order $order)
    {
        $payment  = new PaymobPayment();
        $response = $payment
            ->setUserFirstName($order->customer->user->first_name)
            ->setUserLastName($order->customer->user->last_name)
            ->setUserEmail($order->customer->user->email)
            ->setUserPhone($order->customer->user->phone??'01027388467')
            ->setAmount($order->total_amount)
            ->pay();
            if (isset($response['redirect_url'])) {
                $order->update([
                    'payment_id'=>$response['payment_id'],
                ]);
                return redirect($response['redirect_url']);
            }
            alert('Failed payment.','Your payment has failed','error');
            return back();
    }
    public function verifyWithPaymob(Request $request){
        $payment = new PaymobPayment();
        $response = $payment->verify($request);
        if($response['success']){
            $order = Order::where('payment_id',$response['payment_id'])->first();
            $order->update([
                'payment_status'=>PaymentStatus::Done->value,
            ]);
            alert('Success payment.','Your payment done successfully','success');
            return redirect('/');
        }else{
            alert('Failed payment.','Your payment has failed','error');
            return redirect('/');
        }
    }
}
