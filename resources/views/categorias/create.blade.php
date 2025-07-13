@extends('layout')

@section('content')
<h1>Nova Categoria</h1>
<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection