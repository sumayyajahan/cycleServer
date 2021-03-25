<?php

namespace App\Http\Controllers;

use App\Customer;
use Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    	return view('frontend.checkout.checkout');
    }

    public function saveCustomer(Request $request)
    {
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email_address = $request->email_address;
    	$customer->password = bcrypt($request->password);
    	$customer->phone_number = $request->phone_number;
    	$customer->address = $request->address;
    	$customer->save();

    	Session::put('CustomerId', $customer->id);
    	Session::put('CustomerId', $customer->first_name.' '.$customer->last_name);

    	return redirect('/checkout/shipping');
    }

    public function shippingInfo()
    {   
        
    	return view('frontend.checkout.show-shipping');
    }

    public function ajaxEmailCheck($a)
    {
       $customer = Customer::where('email_address', $a)->first();

       if($customer)
       {
          echo "Already Exist";
       } 
       else
       {
          echo "Available";
       }
    }

    public function contactForm(Request $request)
    {
       $contact = new Contact();
       $contact->name = $request->name;
       $contact->surname = $request->surname;
       $contact->email = $request->email;
       $contact->message = $request->message;
       $contact->save();

       return redirect('/')->with('message', 'Contacts saved successfully');
    }
}
