@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Detalhes do Usuário</legend>
			</div>
			<div class="panel-body">
				<h4>Dados Usuário</h4>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger"> Nome:</label>
						<div class="col-md-5">
							<label class="control-label"> {{$usuario->Nome}}</label>
						</div>
					</div>			
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger">CPF:</label>
						<div class="col-md-5">
							<label class="control-label "> {{$usuario->Cpf}}</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger">Telefone:</label>
						<div class="col-md-5">
							<label class="control-label"> {{$usuario->Telefone}}</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger">Celular:</label>
						<div class="col-md-5">
							<label class="control-label">{{$usuario->Celular}}</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger">E-mail:</label>
						<div class="col-md-5">
							<label class="control-label">{{$usuario->Email}}</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger">Situação:</label>
						<div class="col-md-5">
							<label class="control-label">
									@if ($usuario->Situacao ==1)
									Ativo
									@else
									Inativo
									@endif
							</label>									
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</form>
</div> 

@endsection