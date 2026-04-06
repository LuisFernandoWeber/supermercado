@extends('main')

@section('titulo', 'Fornecedor #'.$f->id)

@section('conteudo')
    <h1>Fornecedor #{{ $f->id }}</h1>
    <form method="POST" action="{{ route('forn.salvar', ['id' => $f->id]) }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="{{ $f->nome }}">
            <label for="nome">Nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="razao_social" placeholder="Razão Social" name="razao_social" value="{{ $f->razao_social }}">
            <label for="razao_social">Razão Social</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj" value="{{ $f->cnpj }}">
            <label for="cnpj">CNPJ</label>
        </div>
        <input type="submit" value="Salvar" class="btn btn-success" />
    </form>
@endsection