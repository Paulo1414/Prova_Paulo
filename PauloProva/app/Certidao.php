<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $fillable = [
        'tipo', 'nomedosEnvolvidos', 'data', 'id_tabeliao'
    ];




}
