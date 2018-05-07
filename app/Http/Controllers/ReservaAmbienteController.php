<?php 
namespace App\Http\Controllers;

use App\Models\ReservaAmbiente;
use App\Models\Ambiente;
use App\Models\Usuario;


class ReservaAmbienteController extends Controller
{
	
	public function index(){

		return view('ReservaAmbiente.index',['ambientes'=>Ambiente::all()]);
	}

	public function create(){
		return view('ReservaAmbiente.create',['ambientes'=>Ambiente::all(),'usuarios'=>Usuario::all()]);
	}
	public function store(){
		
	}

	public function edit(){
		return view('ReservaAmbiente.edit');
	}

	public function update(){

	}
	
	public function destroy(){

	}

	public function getChaves(Ambiente $ambiente){

		return json_encode(['chave'=>Chave::all()]);

	}
}

 ?>