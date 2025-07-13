@extends('layout')

@section('content')
<h1>Lista de Categorias</h1>
<a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>

<table class="table table-striped">
    <thead><tr><th>ID</th><th>Nome</th><th>Ações</th></tr></thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>
                <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
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