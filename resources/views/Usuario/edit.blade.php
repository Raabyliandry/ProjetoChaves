@extends('Templates.layout')
@section('Conteudo')
<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend> Editar Usuário</legend>
			</div>
			<div class="panel-body">
				<h4>Dados do Usuário</h5>
				<fieldset>
					<div class="form-group">
						<label for="nome" class="control-label col-sm-2"> Nome </label>
						<div class="col-md-5">
							<input type="text" name="nome" class="form-control" placeholder="Nome do usuário" value="{{$usuario->Nome}}">
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label for="cpf" class="control-label col-md-2"> CPF</label>
						<div class="col-md-5">
							<input type="text" name="cpf" class="form-control" value="{{$usuario->Cpf}}">
						</div>			
					</div>
				</fieldset>	
				<fieldset>
					<div class="form-group">
						<label for="telefone" class="control-label col-md-2">Telefone</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="telefone" value="{{$usuario->Telefone}}">
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label for="celular" class="control-label col-md-2"> Celular</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="celular" value="{{$usuario->Celular}}">
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label for="email" class="control-label col-md-2"> E-mail</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="email" value="{{$usuario->Email}}">
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label for="situacao" class="control-label col-md-2">Situação</label>
						<div class="col-md-10">
							<input type="radio" name="situacao"> Ativo
							<input type="radio" name="situacao"> Inativo
						</div>
					</div>
				</fieldset>
			<button class="btn  btn-success" type="submit" name="button"> Enviar</button>
			</div>			
		</div>
	</form>
</div>
@endsection