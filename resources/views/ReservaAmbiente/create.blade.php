@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form class="class-horizontal" accept-charset="utf-8" autocomplete="off">
		<div class="panel">
			<div class="panel-heading">
				<legend>Reserva de Ambiente</legend>
			</div>
			<div class="panel-body">
				<fieldset>
					<div class="form-group">
						<label for="resposta" class="control-label col-md-2"> Realizar reserva ?</label>
						<div class="checklist">
							<input  type="checkbox" name="resposta"> Sim 
							<input type="checkbox" name="resposta"> Não
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="col-md-2 control-label"> Ambiente</label>
						<div class="col-md-5">
							<select class="form-control" id="ambiente">
								@foreach ($ambientes as $ambiente)
									<option value="{{$ambiente->id}}">
										{{$ambiente->nome}}
									</option>
								@endforeach							
							</select>
						</div>
					</div>					
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label class="col-md-2 control-label"> Usuário</label>
						<div class="col-md-5">
							<select class="form-control">
								@foreach ($usuarios as $usuario)
									<option>{{$usuario->nome}}</option>
								@endforeach
							</select>
						</div>		
					</div>
				</fieldset>
			</div>
		</div>
	</form>
</div>


@endsection