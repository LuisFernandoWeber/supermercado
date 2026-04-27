<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadesController extends Controller
{
    function listar(){
        $cidades = Cidade::all();

        return view('Cidades/cidades_listar', 
            ['cidades' => $cidades]);
    }

    function novo(){
        return view('Cidades/cidades_novo');
    }

    function salvar(Request $req, $id=null){
        try{
            if ($id){
                $c = Cidade::findOrFail($id);
                $msg = 'Cidade atualizada com sucesso!';
            } else{
                $c = new Cidade();
                $msg = 'Cidade cadastrada com sucesso!';
            }

            $c->nome = $req->nome;
            $c->uf = $req->uf;
            $c->save();

            return redirect('/cidades')->with('success', $msg);
        } catch (\Exception $e) {
            return redirect('/cidades')->with('error', 'Erro ao salvar cidade!');
        }

    }

    function edit($id){
        $c = Cidade::findOrFail($id);

        return view('Cidades/cidades_edit', ['c' => $c]);
    }

    function delete($id){
        try{
            $c = Cidade::findOrFail($id);
            $c->delete();

            return redirect('/cidades')->with('success', 'Cidade excluída com sucesso!');
        } catch (\Exception $e) {
            return redirect('/cidades')->with('error', 'Erro ao excluir a cidade!');
        }
    }
}
