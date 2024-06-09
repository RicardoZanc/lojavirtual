<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function create(){
        return view('types.create');
    }

    //função chamada no submit do form..
    //será um POST com os dados
    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:types|min:2|max:30',
        ]);
        
        //não esquecer import do Type model.
        Type::create(
            [
                'name' => $request->name,
            ]);
            return redirect('/types')->with('success', 'Tipo
            cadastrado com sucesso!');;
        }
        
        public function index(){
            return view('types.index', [
                'types' => Type::all()
            ]);
        }
        
        public function edit($id) {
            //find é o método que faz select * from products where id= ?
            $type = Type::find($id);
            //retornamos a view passando a TUPLA de produto consultado
            return view('types.edit', ['type' => $type]);
        }
        public function update(Request $request) {
            $request->validate([
                'name' => 'required|min:2|max:30',
            ]);
            $type = Type::find($request->id);
            //método update faz um update product set name = ? etc...
            $type->update([
                'name' => $request->name,  
            ]);
            return redirect('/types')->with('success', 'Tipo atualizado
            com sucesso!');
        }

    public function destroy($id){
        //select * from product where id = ?
        $type = Type::find($id);
        //deleta o produto no banco
        $type->delete();
        return redirect('/types')->with('success', 'Produto
        excluído com sucesso!');
    }
}
