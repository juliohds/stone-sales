<?php

namespace App\Http\Controllers;
use App\Customer;
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
        $customer->fill($request->all());
        $customer->save();
        return response()->json($customer);
    }

    public function showAll(){
        $customer = Customer::all();
        return response()->json($customer);
    }
}
