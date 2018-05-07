<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller
{

	/**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

	public function index()
	{
		return view('Usuario.index',['usuarios'=>Usuario::all()]);
	}

	public function create(Usuario $usuario){

		return view('Usuario.create',['usuarios'=>Usuario::all()]);
	}
	public function store(Usuario $usuario){

	}

	public function edit( Usuario $usuario){

		return view('Usuario.edit',['usuario'=>$usuario]);
	}

	public function update(){

	}

	public function show(Usuario $usuario){

		return view('Usuario.detalhes',['usuario'=>$usuario]);
	}


}



 ?>