@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Gerenciamento - Perfis</legend>
				<a href="{{URL::to('perfil/criar')}}" class="pull-right btn btn-success">Criar</a>
			</div>
			<div class="panel-body">
				@include('Templates.open-table',["colunas"=>["#","Perfil"]])
					@foreach ($perfil as $perfil)	
					<tr class="text-center">
						<td>
							<a href="{{URL::to('perfil/detalhes/'.$perfil->id)}}" class="btn btn-sm btn-default inline"> Detalhes</a>
							<a href="{{URL::to('perfil/editar/'.$perfil->id)}}" class="btn btn-sm btn-primary inline">Editar</a>
							<a href="" class="btn btn-sm btn-danger inline"> Excluir</a>
						</td>
						<td> {{$perfil->nome}}</td>
					</tr>
					@endforeach							
				@include('Templates.close-table')		
			</div>
		</div>
	</form>
</div>
@endsection