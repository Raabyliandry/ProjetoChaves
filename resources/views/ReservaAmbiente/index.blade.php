@extends('Templates.layout')
@section('Conteudo')
<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<a class="btn btn-success pull-right" href="{{'reserva/criar'}}"> Criar</a>
				<legend> Gerenciamento de Empréstimos</legend>
			</div>
			<div class="panel-body">
				<div class="col-md-6">
					@include('Templates.open-table',["colunas"=>["Chaves Disponíveis"]])
						<tr class="text-center">
							<td></td>
						</tr>
					@include('Templates.close-table')
				</div>
				<div class="col-md-6">
					@include('Templates.open-table',["colunas"=>["Chaves Ocupadas"]])
						<tr class="text-center ">
							<td>{{}}</td>
						</tr>
					@include('Templates.close-table')
				</div>				
			</div>
		</div>
	</form>
</div>


@endsection