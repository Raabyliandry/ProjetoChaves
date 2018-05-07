@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" method="post" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">	
				<legend> Usuários - Gerenciamento</legend>
			</div>
			<div class="panel-body">
				@include('Templates.open-table',["colunas"=>["#","Nome","Celular","E-mail"]])
					@if($usuarios->IsNotEmpty())
						@foreach ($usuarios as $usuario)
							<tr class="text-center">
								<td>								
									<a class="btn btn-sm btn-default inline" href="{{URL::to('usuario/detalhes/'.$usuario->Id)}}"> Detalhes</a>
									<a class="btn btn-sm btn-primary inline"  href="{{URL::to('usuario/editar/'.$usuario->Id)}}">Editar</a>
									<a class="btn btn-sm btn-danger inline" href="{{URL::to('usuario/excluir/'.$usuario->Id)}}">Excluir</a>
								</td>
								<td>{{$usuario->Nome}}</td>
								<td>{{$usuario->Celular}}</td>
								<td>{{$usuario->Email}}</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td>Não há registros</td>
						</tr>
					@endif
				@include('Templates.close-table')				
			</div>
		</div>
	</form>
	
</div>

@endsection