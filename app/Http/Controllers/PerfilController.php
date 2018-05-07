<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Ambiente;

class PerfilController extends Controller
{
	 /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
	
	public function index(){

		return view('Perfil.index',['perfil'=>Perfil::all()]);
	}
	

	public function create(Perfil $perfil){

		return view('Perfil.create',['perfil'=>Perfil::all()]);
	}

	public function edit(Perfil $perfil, Ambiente $ambiente){

		return view('Perfil.edit',['perfil'=>$perfil]);
	}

	public function update(Perfil $perfil){
		// $data =[
		// 	'descricao'=>$descricao
		// ]
		return view();
	}

	public function show(Perfil $perfil){
		return view('Perfil.detalhes',['perfil'=>$perfil]);
	}

	public function destroy(){

	}
}



 ?>