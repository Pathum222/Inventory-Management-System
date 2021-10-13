<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Customer;

class Customercontroller extends Controller
{
    public function viewCustomers(){
        $customers = Customer::all();
        return view('customers')->with('customers', $customers);

    } //
    public function viewaddCustomers (){
        
        return view('addcustomer');

    }
    public function vieweditCustomers($customer_id){
        $customer= Customer::find($customer_id);
        return view('editcustomer')->with('customer', $customer);

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
    public function editCustomer(Request $request,$customer_id){
        $customer= Customer::find($customer_id);

       
        $request->validate([
            'customer_name'=>'required|string|max:50',
            'telephone'=>'required|string|max:12',
         
        ]);

       
        $customer->customer_name = $request->customer_name;
        $customer->telephone = $request->telephone;
       
        $customer->save();

        return redirect()->back()->with('success','Successfully Saved!');


    }
    public function deleteCustomer($customer_id){
        $customer = Customer::find($customer_id);
        $customer->delete();
        return redirect()->back();
    }
    
}
