@extends('main')

@section('titulo', 'Nova Cidade')

@section('conteudo')
    <h1>Nova Cidade</h1>
    <form method="POST" action="{{ route('cidade.salvar') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
            <label for="nome">Nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="uf" placeholder="uf" name="uf">
            <label for="uf">Unidade Federal</label>
        </div>
        <input type="submit" value="Salvar" class="btn btn-success" />
    </form>
@endsection