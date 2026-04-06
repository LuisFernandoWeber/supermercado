@extends('main')

@section('titulo', 'Listar Produtos')

@section('conteudo')
    <h1>Fornecedores</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $f)
            <tr>
                <td>{{ $f -> id}}</td>
                <td>{{ $f -> nome}}</td>
                <td>{{ $f -> razao_social}}</td>
                <td>{{ $f -> cnpj}}</td>
                <td>
                    <a href="{{ route('forn.edit', ['id' => $f->id]) }}" class="btn btn-warning">Alterar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <a class="btn btn-success" href="{{ route('forn.novo') }}">Novo fornecedor</a>
    </div>
@endsection
