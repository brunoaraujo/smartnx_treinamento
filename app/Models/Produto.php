<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $primaryKey = 'prd_id';

    protected $fillable = ['prd_cat_id', 'prd_nome', 'prd_qtd', 'prd_descricao'];

    protected $casts = ['prd_qtd' => 'int'];

    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'cat_id', 'prd_cat_id');
    }
}
