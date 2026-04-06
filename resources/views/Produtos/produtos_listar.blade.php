@extends('main')

@section('titulo', 'Lista de Produtos')

@section('conteudo')
<h1>Produtos</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estoque</th>
            <th>Valor</th>
            <th>Data criação</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
        <tr> 
            <td>{{ $p->id }}</td>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->estoque }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->created_at }}</td>
            <td>
                <a href="{{ route('prod.edit', ['id' => $p->id]) }}" 
                    class="btn btn-warning">
                    Alterar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a class="btn btn-success" 
        href="{{ route('prod.novo') }}">
        Novo produto</a>
</div>
@endsection