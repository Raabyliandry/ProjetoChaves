<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
	protected $table = 'ambientes';
	public $timestamps = false;

	public $fillable = [
	    "nome",
	    "bloco"
	];


}
    
