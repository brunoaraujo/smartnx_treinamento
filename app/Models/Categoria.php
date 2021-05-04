<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'cat_id';

    protected $fillable = ['cat_nome'];

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto', 'prd_cat_id', 'cat_id');
    }
}
