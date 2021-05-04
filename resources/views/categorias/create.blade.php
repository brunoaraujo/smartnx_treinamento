<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>CADASTRO DE CATEGORIAS</h2>

    <form method="POST" action="{{route('app.categorias.create')}}">
        @csrf

        NOME*: <input type="text" name="cat_nome" style="border: 1px solid {{$errors->has('cat_nome') ? 'red' : '#000'}}"/>
        teste*: <input type="text" name="bruno"/>
        @if ($errors->has('cat_nome')) <p style="color: red">{{ $errors->first('cat_nome') }}</p> @endif

        <br>
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>
