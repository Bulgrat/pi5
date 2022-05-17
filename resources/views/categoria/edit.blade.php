<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Edit Categoria</title>
</head>
<body>
    <h1>Editor de categorias</h1>

    <form method="POST" action="{{ Route('update', $categoria->id) }}">
        @csrf
        <span>Nome</span>
        <input type="text" name="name" value="{{ $categoria->name }}">
        <button type='submit'>Cria</button>
    </form>
</body>
</html>
