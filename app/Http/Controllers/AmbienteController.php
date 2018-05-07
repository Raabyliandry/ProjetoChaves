<?php 
namespace App\Http\Controllers;

use App\Models\Ambiente;


class AmbienteController extends Controller
{
	
	public function index(){

		return view('Ambiente.view');

	}
	
}



 ?>