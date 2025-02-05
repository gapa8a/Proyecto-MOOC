<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Course $course){
        // return $course;
        return view('payment.checkout',compact('course'));
    }


    public function pay(Course $course){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('services.paypal.client_id'),     // ClientID
                config('services.paypal.client_secret')   // ClientSecret
            )
    );  

            $payer = new \PayPal\Api\Payer();
            $payer->setPaymentMethod('paypal');

            $amount = new \PayPal\Api\Amount();
            $amount->setTotal($course->price->value);
            $amount->setCurrency('USD');

            $transaction = new \PayPal\Api\Transaction();
            $transaction->setAmount($amount);

            $redirectUrls = new \PayPal\Api\RedirectUrls();
            $redirectUrls->setReturnUrl("https://example.com/your_redirect_url.html")
                ->setCancelUrl("https://example.com/your_cancel_url.html");

            $payment = new \PayPal\Api\Payment();
            $payment->setIntent('sale')
                ->setPayer($payer)
                ->setTransactions(array($transaction))
                ->setRedirectUrls($redirectUrls);


                // After Step 3
            try {
                $payment->create($apiContext);

                return redirect()->away($payment->getApprovalLink());
                
            }
            catch (\PayPal\Exception\PayPalConnectionException $ex) {
                // This will print the detailed information on the exception.
                //REALLY HELPFUL FOR DEBUGGING
                echo $ex->getData();
            }

    }
}
