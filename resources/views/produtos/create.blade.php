@extends('layout')

@section('content')
<h1>Novo Produto</h1>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço:</label>
        <input type="text" name="preco" id="preco" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="categoria_id" class="form-label">Categoria:</label>
        <select name="categoria_id" id="categoria_id" class="form-select">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection