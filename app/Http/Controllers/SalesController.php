<?php

namespace App\Http\Controllers;
use App\Sales;
use App\Freight;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $sales = Sales::find($id);
        return response()->json($sales);
    }

    public function create(Request $request){
        $sales = new Sales();
        $sales->fill($request->input('sales'));
        $sales->save();

        $freight = new Freight();
        $freight->fill($request->input('freight'));
        $freight->sale_id = $sales->id;
        $freight->save();
        return response()->json($sales);
    }
    
    public function showAll(){
        $sales = Sales::with(['customer','product'])->get();
        return response()->json($sales);
    }
}
