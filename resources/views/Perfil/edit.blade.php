@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Editar Perfil</legend>
			</div>
			<div class="panel-body">
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2"> Descrição</label>
						<div class="col-md-5">
							<input type="text" name="descricao" class="form-control" value="{{$perfil->Descricao}}">
						</div>					
					</div>
				</fieldset>
				<fieldset>
					<button class="btn btn-success" type="submit"> Salvar</button>
				</fieldset>				
			</div>
		</div>
	</form>
</div>

@endsection