<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  public $timestamps = false;

  public $fillable = [
    "perfil_id",
  	"nome",
  	"cpf",
  	"telefone",
  	"celular",
  	"email",
  	"situacao"
  ];

  
  public function Perfil(){
    return $this->hasOne('App\Models\Perfil', 'perfil_id','id');
  }
}
