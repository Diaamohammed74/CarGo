<?php

namespace App\Http\Controllers\Front;

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
        return redirect($response['redirect_url']);
    }
    public function verifyWithPaymob(Request $request){
        $payment = new PaymobPayment();
        $response = $payment->verify($request);
        if($response['success']){
            alert('Success payment.','Your payment done successfully','success');
            return redirect('/');
        }else{
            alert('Failed payment.','Your payment has failed','error');
            return redirect('/');
        }
    }
}
