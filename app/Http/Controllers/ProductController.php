<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $product = Product::with('productCategory')->find($id);
        return response()->json($product);
    }

    public function create(Request $request){
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()->json($product);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->fill($request->all());
        $product->update();
        return response()->json($product);
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json($product);
    }

    public function showAll(){
        $products = Product::all();
        return response()->json($products);
    }
}
