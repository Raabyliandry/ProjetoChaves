@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="form-horizontal" accept="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Editar reserva</legend>
			</div>
			<div class="panel-body">
				<fieldset>
					<div class="form-group">
						<label class="control-label col-md-2 text-danger"> Chave</label>
						<input type="text" class="form-control" name="chave" value="">
					</div>
				</fieldset>
			</div>
		</div>
	</form>
</div>

@endsection