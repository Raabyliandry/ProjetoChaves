@extends('Templates.layout')
@section('Conteudo')
<div class="container">
	<form method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">
		<div class="panel">
			<div class="col-md-12">
			<div class="panel-heading">
				<legend>Criar Usuário</legend>
			</div>
			<div class="panel-body">
				<h4> Informações Usuário</h4>
					<fieldset>
						<div class="form-group">
							<label for="nome" class="col-sm-5 control-label" name="Nome"> Nome</label>
							<input type="text" class="form-control" name="nome" placeholder="Digite o nome aqui">
						</div>
					</fieldset>		
					<fieldset>
						<div class="form-group">
							<label for="cpf" class="col-sm-5 control-label"> CPF</label>
							<input type="number" name="cpf" class="form-control">
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label for="telefone" class="col-sm-5 control-label">Telefone</label>
						</div>
					</fieldset>
			</div>
		</div>
		</div>
	</form>
</div>

@endsection