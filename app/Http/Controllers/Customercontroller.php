<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Customer;

class Customercontroller extends Controller
{
    public function viewCustomers(){
        $customers = Customer::all();
        return view('customers')->with('customers', $customers);

    } //
    public function viewaddCustomers (){
        
        return view('addcustomer');

    }
    public function vieweditCustomers(){
        
        return view('editcustomer');

    }
    public function addCustomer(Request $request){

       
        $request->validate([
            
            'customer_name'=>'required|string|max:50',
            'telephone'=>'required|string|max:12',
            
         
        ]);
        
        $customer = new Customer();

        $customer->customer_name = $request->customer_name;
        $customer->telephone = $request->telephone;
       
        $customer->save();

        return $customer;

    }
}
