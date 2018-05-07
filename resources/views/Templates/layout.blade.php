<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	 <title> SGC @yield('title')</title>
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/select2-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/datetimepicker/css/bootstrap-datetimepicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/slider/css/slider.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome-all.css")}}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastrar<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Chave</a></li>
            <li><a href="#">Usuário</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ambiente</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="o que você está procurando?">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
    </div>
  </div>
</nav>
 @yield("Conteudo")

<footer>
  <div class="row">
    <div class="container">
      <div class="col-md-6 text-left">
        <p>Sistema Gerenciador de Chaves</p>
        <p>Contato para informações: <a href="{{"mailto:raabyliandry@gmail.com"}}">
        raabyliandry@gmail.com</a>.</p>
      </div>

      <div class="col-md-6">
        <p> Esta página foi desenvolvida utilizando Laravel</p>
        <p> Mais informações: <a href="{{"https://www.laravel.com"}}" target="blank"> Laravel</a></p>
      </div>
  </div>
 </footer> 
 
	<script src= "{{asset("assets/js/app.js")}}"></script>
	{{-- <script src= "{{asset("assets/js/fastclick.js")}}"></script>
	<script src= "{{asset("assets/js/app.jquery.slimscroll.js")}}"></script>
	<script src= "{{asset("assets/js/jquery.sparkline.js")}}"></script>
	<script src= "{{asset("assets/js/Mascara.js")}}"></script>
	<script src= "{{asset("assets/js/mask.js")}}"></script>
	 --}}<script src= "{{asset("assets/js/modernizr.js")}}"></script>
	<script src= "{{asset("assets/js/notify.min.js")}}"></script>
	<script src= "{{asset("assets/js/select2.min.js")}}"></script>
	<script src= "{{asset("assets/js/site.js")}}"></script>
</body>
</html>