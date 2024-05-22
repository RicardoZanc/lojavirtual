<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(){
        return view('products.create');
    }

    //função chamada no submit do form..
    //será um POST com os dados
    public function store(Request $request){
        //não esquecer import do Product model.
        Product::create(
        [
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type_id' => $request->type_id
        ]);
        return redirect('/products');
    }

public function index(){
    return view('products.index', [
    'products' => Product::all()
    ]);
}


}
