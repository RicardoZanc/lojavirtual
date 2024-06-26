<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(){
        return view('products.create', ['types' => Type::All()]);
    }

    //função chamada no submit do form..
    //será um POST com os dados
    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:2|max:30',
            'description' => 'max:200',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|numeric'
        ]);
        
        //não esquecer import do Product model.
        Product::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'type_id' => $request->type_id
            ]);
            return redirect('/products')->with('success', '');;
        }
        
        public function welcome(){
            return view('welcome', [
            'products' => Product::all()->where('quantity', '>', 0)
            ]);
        }

        public function index(){
            return view('products.index', [
                'products' => Product::all()
            ]);
        }
        
        public function edit($id) {
            //find é o método que faz select * from products where id= ?
            $product = Product::find($id);
            //retornamos a view passando a TUPLA de produto consultado
            return view('products.edit', ['product' => $product, 'types' => Type::All()]);
        }
        public function update(Request $request) {
            $request->validate([
                'name' => 'required|min:2|max:30',
                'description' => 'max:200',
                'price' => 'required|numeric|gt:0',
                'quantity' => 'required|numeric'
            ]);
            $product = Product::find($request->id);
            //método update faz um update product set name = ? etc...
            $product->update([
    'name' => $request->name,
    'description' => $request->description,
    'quantity' => $request->quantity,
    'price' => $request->price,
    'type_id' => $request->type_id
    ]);
    return redirect('/products')->with('success', 'Produto atualizado
    com sucesso!');
    }

    public function destroy($id)
{
//select * from product where id = ?
$product = Product::find($id);
//deleta o produto no banco
$product->delete();
return redirect('/products')->with('success', 'Produto
excluído com sucesso!');
}

}
