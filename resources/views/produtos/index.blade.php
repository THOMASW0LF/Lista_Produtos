@extends('layout')

@section('content')
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Novo Produto</a>

    <table class="table table-striped">
        <thead><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Categoria</th><th>Ações</th></tr></thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->categoria?->nome }}</td>
                <td>
                    <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection