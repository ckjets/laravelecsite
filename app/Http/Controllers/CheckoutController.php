<?php

namespace App\Http\Controllers;

// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

use App\Order;  
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function store()
    {
        
    }

    public function payment()
    {
        return view('front.payment');
    }  
     public function   storePayment(Request $request)
    {
       
        \Stripe\Stripe::setApiKey("sk_test_kAI5HVcgvtUi6pKazYDAzMnK");
        // Get the credit card details submitted by the form
                $token = $request->stripeToken;
        // Create a charge: this will charge the user's card
                try {
                    $charge = \Stripe\Charge::create(array(
                        "amount" =>Cart::add();, // Amount in cents
                        "currency" => "usd",
                        "source" => $token,
                        "description" => "Example charge"
                    ));
                } catch (\Stripe\Error\Card $e) {
                    // The card has been declined
                }
              //Create the order
               Order::createOrder();
                //redirect user to some page
                return "Order completed";
            }
        }