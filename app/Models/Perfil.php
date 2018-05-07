<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
  protected $table = 'perfis';
  protected $primaryKey ='id';
  public $timestamps = false;


  public $fillable = [
  	
  	"nome"
  ];

}
