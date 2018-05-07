<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
  protected $table = 'permissoes';
  protected $primaryKey = 'id';
  public $timestamps = false;

  public $fillable = [
  	
  	"descricao"
  ];

  // public function Perfil(){

  // 	return $this->belongsToMany('App\Models\Perfil', 'perfis', 'PermissaoId', 'PerfilId');
  // }

}
