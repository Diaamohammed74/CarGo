<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nafezly\Payments\Classes\PaymobPayment;

class PayMobController extends Controller
{
    public function payWithPaymob(Request $request){
        $payment = new PaymobPayment();
        $response = $payment
        ->setUserFirstName('diaa')
        ->setUserLastName('diaa')
        ->setUserEmail('diaa@gmail.com')
        ->setUserPhone('01027388467')
        ->setAmount(20)
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