@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" method="post" accept-charset="utf-8">
		<div class="panel">
			<div class="panel-heading">	
				<div class=""></div>
				<a class="pull-right btn btn-success inline" data-toggle="tooltip" data-placement="top" title="Criar nova Chave" href="{{'/chave/criar'}}">Criar</a>
				<legend> Chaves - Gerenciador</legend>
			</div>
			<div class="panel-body">				
				@include('Templates.open-table',["colunas"=>["#","Chave ","Ambiente","Bloco"]] )
				@if ($chaves->isNotEmpty())			
					@foreach($chaves as $chave)
					<tr class="text-center">
						<td>
							<a class="btn btn-sm btn-primary inline" data-toggle="tooltip" data-placement="top" title="Editar" href="{{URL::to('chave/editar/'.$chave->id)}}">Editar.</a> 
							<a class="btn btn-sm btn-danger inline" data-toggle="tooltip" data-placament="top" title="Excluir" href="">Excluir</a>
						</td>	
						<td>{{ $chave->nome }}</td>			
						<td>{{ $chave->ambiente->nome }}</td>
						<td>{{ $chave->ambiente->bloco}}</td> 	
					</tr>
					@endforeach
				@else
					<tr>
						<td> Não há registros</td>
					</tr>
				@endif
				@include('Templates.close-table')
			</div>
		</div>		
	</form>	
</div>

@endsection