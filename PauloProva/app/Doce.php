<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doce extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'preco', 'marca', 'imagem', 'publicado'
    ];
}
