<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    function listar(){
        $fornecedores = Fornecedor::all();

        return view('Fornecedores/fornecedores_listar', ['fornecedores'=>$fornecedores]);
    }

    function novo(){
        return view('Fornecedores/fornecedores_novo');
    }

    function salvar(Request $req, $id=null){
        if ($id){
            $f = Fornecedor::findOrFail($id);
        } else{
            $f = new Fornecedor();
        }

        $f->nome = $req->nome;
        $f->razao_social = $req->razao_social;
        $f->cnpj = $req->cnpj;
        $f->save();

        return redirect('/fornecedores');
    }

    function edit($id){
        $f = Fornecedor::findOrFail($id);

        return view('Fornecedores/fornecedores_edit', ['f' => $f]);
    }

    function delete($id){
        $f = Fornecedor::findOrFail($id);
        $f->delete();

        return redirect('/fornecedores');
        
    }
}
