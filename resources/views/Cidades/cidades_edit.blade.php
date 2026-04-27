@extends('main')

@section('titulo', 'Cidade #'.$c->id)

@section('conteudo')
    <h1>Cidade #{{ $c->id }}</h1>
    <form method="POST" action="{{ route('cidade.salvar', ['id' => $c->id]) }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="{{ $c->nome }}">
            <label for="nome">Nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="uf" placeholder="uf" name="uf" value="{{ $c->uf }}">
            <label for="razao_social">Unidade Federal</label>
        </div>
        <input type="submit" value="Salvar" class="btn btn-success" />
    </form>
@endsection