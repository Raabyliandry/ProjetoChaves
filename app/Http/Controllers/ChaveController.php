<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chave;
use App\Models\Ambiente;

class ChaveController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
         return view('Chave.index',['chaves' => Chave::all()]);
    }

    public function create(Chave $chave, Ambiente $ambiente)
    { 
         return view('Chave.create',['ambientes'=>Ambiente::all()]);
    }

    public function edit(Chave $chave){

         return view('Chave.edit',['chave'=>$chave]);
    }

    public function store(){
        
    }

    public function update (Chave $chave){
        
    }

    public function destroy(Aluno $aluno){

    }
}