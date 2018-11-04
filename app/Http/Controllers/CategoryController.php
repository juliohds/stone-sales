<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($id){
        $category = Category::find($id);
        return response()->json($category);
    }

    public function create(Request $request){
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return response()->json($category);
    }

    public function showAll(){
        $category = Category::all();
        return response()->json($category);
    }
}
