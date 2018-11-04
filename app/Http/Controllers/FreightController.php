<?php

namespace App\Http\Controllers;
use App\Freight;
use Illuminate\Http\Request;


class FreightController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function novo(){
        $freight = new Freight();
        $freight->day = $freight->newDay();
        $freight->price = $freight->newPrice();
        return response()->json($freight);
    }

}
