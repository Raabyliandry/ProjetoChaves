@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Criar Perfil</legend>
			</div>
			<div class="panel-body">
				<fieldset>
					<div class="form-group">
					<label for="descricao" class="control-label col-md-2">Descrição</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="descricao">
						</div>
					</div>
				</fieldset>	
				<fieldset>
					<button type="submit" class="btn btn-success">Salvar</button>	
				</fieldset>	
			</div>
		</div>
	</form>
</div>

@endsection