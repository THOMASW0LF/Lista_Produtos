<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('home') }}">Início</a>
    <div class="navbar-nav">
        <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
        <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
