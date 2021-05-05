<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaComponent extends Component
{
    public $model;
    public $data;
    public $form;
    public $isOpen = false;

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->model = new Categoria();
        $this->form = ['cat_nome' => null];
    }

    public function render()
    {
        $this->data = $this->model->all();
        return view('livewire.categoria-component');
    }

    public function store()
    {
        $this->validate(['form.cat_nome' => 'required']);
        $this->model->create($this->form);
        $this->form['cat_nome'] = null;

        $this->isOpen = false;
    }

    public function new()
    {
        $this->isOpen = true;
    }

    public function edit($id)
    {
        $obj = $this->model->find($id);

        if($obj->count())
        {
            $this->form = $obj->toArray();
        }
    }

    public function delete($id)
    {
        $obj = $this->model->find($id)->delete;
    }
}
