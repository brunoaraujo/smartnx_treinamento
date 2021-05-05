@extends('layout.main')

@section('title') GERENCIAMENTO DE CATEGORIAS @endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="{{route('app.categorias.create')}}">NOVO</a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>CATEGORIA</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->cat_id}}</td>
                            <td>{{$categoria->cat_nome}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('app.categorias.edit', $categoria->cat_id)}}">Editar</a>
                                <a class="btn btn-danger" href="{{route('app.categorias.delete', $categoria->cat_id)}}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
