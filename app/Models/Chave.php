<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
   protected $table = 'chaves_ambiente';
   public $timestamps =false;


   public $fillable = [
   	"nome"
   ];

  public function ambiente(){

  	return $this->hasOne('App\Models\Ambiente', 'id','ambiente_id');
    
  }
}
