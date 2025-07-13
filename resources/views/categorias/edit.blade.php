@extends('layout')

@section('content')
<h1>Editar Categoria</h1>
<form action="{{ route('categorias.update', $categoria) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $categoria->nome }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
