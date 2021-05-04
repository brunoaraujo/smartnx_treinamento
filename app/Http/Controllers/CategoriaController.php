<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    protected $model;

    public function __construct(Categoria $model)
    {
        $this->model = $model;
    }

    public function getIndex()
    {
        $categorias = $this->model->all();
        return view('categorias.index', compact('categorias'));
    }

    public function getCreate()
    {
        return view('categorias.create');
    }

    public function postCreate(CategoriaRequest $request)
    {
        $categoria = $this->model->create($request->all());

        if($categoria)
        {
            return redirect()->route('app.categorias.index');
        }
    }

    public function getEdit()
    {

    }

    public function putEdit()
    {

    }

    public function getDelete()
    {

    }
}
