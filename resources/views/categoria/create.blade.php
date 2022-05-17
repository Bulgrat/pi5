<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Cria Categoria</title>
</head>
<body>
    <h1>Cadastro de categorias</h1>

    <form method="POST" action="{{ Route('store') }}">
        @csrf
        <span>Nome</span>
        <input type="text" name="name">
        <button type='submit'>Cria</button>
    </form>
</body>
</html>
