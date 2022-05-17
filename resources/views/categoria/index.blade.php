<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
</head>
<body>
    <h1>Lista de categorias</h1>
    <a href="{{Route('createWeb')}}">Cadastro</a>
    <a href="{{Route('dashboard')}}">Home</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td>
                        <a href="{{ Route('edit', $categoria->id) }}">Edit</a>
                        <a href="#" onclick="remover('{{ Route('destroy', $categoria->id) }}');">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function remover(route) {
            if (confirm('Quer mesmo apagar?'))
                window.location = route;
        }
    </script>
</body>
</html>
