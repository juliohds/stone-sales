<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Address;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    public function create(Request $request){
        $customer = new Customer();
        $customer->fill($request->input('customer'));
        $customer->save();

        $address = new Address();
        $address->fill($request->input('address'));
        $address->customer_id = $customer->id;
        $address->save();

        return response()->json($customer);
    }

    public function showAll(){
        $customer = Customer::all();
        return response()->json($customer);
    }
}
