@extends('Templates.layout')
@section('Conteudo')

<div class="container">
  <form method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">

	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<legend>Criar Chave</legend>
			</div>
				<div class="panel-body">
					<h4>Informações Chave</h5>	
						<fieldset>
							<div class="form-group">
								<label for="Nome" class="col-sm-2 control-label"> Nome <span class="text-danger">*</span></label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="nome">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<div class="form-group">
								<label for="bloco" class="col-sm-2 control-label">Bloco <span class="text-danger">*</span></label>
								<div class="col-sm-2">
									<select class="form-control">
										<optgroup label="Blocos"> 
											<option>Bloco A</option>
											<option>Bloco B</option>
											<option>Bloco C</option>
										</optgroup>									
									</select>
								</div>
							</div>
						</fieldset>							
						<fieldset>
							<div class="form-group">
								<label class="col-sm-2 control-label"> Ambiente <span class="text-danger">*</span></label>
								<div class="col-sm-4">
									<select class="form-control">
										<optgroup label="Ambientes">
											@foreach ($ambientes as $ambiente)
												<option>
													{{$ambiente->descricao}}
												</option>
											@endforeach
										</optgroup>
									</select>
								</div>
							</div>
						</fieldset>	
						<fieldset>
							<div class="form-group">
								<label class="col-sm-2 control-label">Situação <span class="text-danger">*</span></label>
									<label class="radio-inline">
										<input type="radio" value="1" name="situacao"> Ativa	
									</label>
									<label class="radio-inline">
										<input type="radio" value="0" name="situacao"> Inativa
									</label>	
								</div>				
						</fieldset>	
						<button class="btn btn-success"  type="submit"> <i class="fa fa-save"></i>Salvar</button>	
					</div>
				</div>
			</div>
		</div>
	</form>	
</div>

@endsection