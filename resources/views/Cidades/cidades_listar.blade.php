@extends('main')

@section('titulo', 'Listar Cidades')

@section('conteudo')
    <h1>Cidades</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>UF</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cidades as $c)
            <tr>
                <td>{{ $c -> id}}</td>
                <td>{{ $c -> nome}}</td>
                <td>{{ $c -> uf}}</td>
                <td>
                    <a href="{{ route('cidade.edit', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
                    <a href="{{ route('cidade.delete', $c->id) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <a class="btn btn-success" href="{{ route('cidade.novo') }}">Nova Cidade</a>
    </div>
@endsection
