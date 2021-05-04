<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="{{route('app.categorias.create')}}">NOVO</a><br>
    <table border="1">
        <tr>
            <th>CODIGO</th>
            <th>CATEGORIA</th>
            <th>#</th>
        </tr>

        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->cat_id}}</td>
                <td>{{$categoria->cat_nome}}</td>
                <td>
                    <a href="{{route('app.categorias.edit', $categoria->cat_id)}}">Editar</a><br>
                    <a href="{{route('app.categorias.delete', $categoria->cat_id)}}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
