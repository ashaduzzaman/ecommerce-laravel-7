<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout()
    {
        $checkoutData = $this->checkoutData();

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        // dd($response);

        return redirect($response['paypal_link']);
    }

    public function cancelPage()
    {
        dd('payment failed');
    }

    public function getExpressCheckoutSuccess(Request $request)
    {
        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData();

        $response = $provider->getExpressCheckoutDetails($token);

        if(in_array(strtoupper($request['ACK']), ['success', 'SUCCESSWITHWARNING'])) {
            // Perfom transaction on paypal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
        }

        dd('payment successful');
    }

    public function checkoutData()
    {
        $cart = \Cart::session(auth()->id());
        $cartItems = array_map(function($item){
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']
            ];
        }, $cart->getContent()->toarray());


        $checkoutData = [
                'items' => $cartItems,
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel'),
                'invoice_id' => uniqid(),
                'invoice_description' => "Order description",
                'total' => $cart->getTotal()
        ];

        return $checkoutData;
    }
}
