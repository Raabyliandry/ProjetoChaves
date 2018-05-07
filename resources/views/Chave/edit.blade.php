@extends('Templates.layout')
@section('Conteudo')

<div class="container">
	<form method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">
		<div class="panel">
			<div class="panel-heading">
				<legend>Editar Chave</legend>
			</div>
			<div class="panel-body">
				<h4> Dados da Chave</h4>
				<fieldset>
					<div class="form-group">
						<label for="Nome" class="col-sm-2 control-label"> Nome <span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="Nome" id="Nome" placeholder="Qual o nome da chave? " value="{{$chave->nome}}">
						</div>
					</div>
					{{-- incluir validação de campo aqui --}}
				</fieldset>	
				<fieldset>
					<div class="form-group">
						<label for="Bloco" class="col-sm-2 control-label"> Bloco <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<select class="form-control">
								<optgroup label="Blocos">
									<option>Bloco A </option>
									<option>Bloco B</option>
									<option>Bloco C</option>
								</optgroup>								
							</select>			
						</div>
					</div>
				</fieldset>	
				<fieldset>
					<div class="form-group">
						<label for="Situacao" class="control-label col-md-2 col-sm-2" name="Situacao" id="Situacao"> Situação</label>
						<div class="col-md-10">		
							<input type="radio" name="situacao" id="ativo" value="1"> Ativa 
							<input for="situacao" type="radio" name="situacao" id="inativa" value="0"> Inativa
						</div>
					</div>
				</fieldset>	
				<button class="btn  btn-success" name="button"> Salvar</button>
			</div>	
		</div>
	</form>
</div>
@endsection
