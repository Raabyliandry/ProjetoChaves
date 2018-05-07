<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaAmbiente extends Model
{
   

    public $fillable =[
    	"usuario_id",
    	"ambiente_id",
    	"data_solicitacao",
    	"data_entrada",
    	"data_saida",
    	"data_reserva_inicio",
    	"data_reserva_fim",
    	"observacao"
    ];

  
    public function Usuario(){
        return $this->hasOne('App\Models\Usuario','id','usuario_id');
    }

    public function Ambiente(){
        return $this->hasOne('App\Models\Usuario','id','ambiente_id');
    }


}
