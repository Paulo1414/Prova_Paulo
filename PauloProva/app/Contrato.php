<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

  
    protected $fillable = [
        'id_tabeliao','TipoContrato','NomeEnvolvidos','DataContrato','valor'
    ];

    public function contrato_table()
    {
        return $this->hasOne(Tabeliao::class);
    }
   
}
