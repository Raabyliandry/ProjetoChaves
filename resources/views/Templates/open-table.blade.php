<div class="table-stripped">
  <table class="table">
    <thead>
      <tr>
        <!-- Lista colunas -->
        @foreach ($colunas as $coluna)                
          <th width="200" class ="text-center"> {{$coluna}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      
    