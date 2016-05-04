<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Libreria Virtual</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<header>
    <?php $route = Route::current()->uri(); // obtener la ruta actual
        //en la etiqueta a la que se va a referenciar es necesario ingresar lo siguiente
        //class=@if($route=='tienda'){{'clasecssqueaplicacambio'}}@
        //el tipo de usuario se puede especificar de la siguiente manera  <!--se puede poner tambien {{Auth::user()->nombre}} -->
      ?>
  		<nav class="amber darken-4">
    		<div class="nav-wrapper">
      			<a href="/" class="brand-logo center"><i class="fa fa-book "></i>&nbsp Libreria</a>
      			<a href="/" data-activates="mobile-demo" class="button-collapse">&nbsp &nbsp<i class="fa fa-bars"></i></a>
            <ul class="right hide-on-med-and-down">

        	    <li><a href="#!">{{ session()->get('administrador')->nombre }}</a></li>
              <li><a href="/logout" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      			<ul class="side-nav" id="mobile-demo">
         			<li><a href="/logout"><i class="fa fa-sign-in"></i>Salir</a></li>
      			</ul>
     		</div>
    	</nav>   
  </header>
  @yield('navegacion')
  @yield('content')

  <footer class="page-footer amber darken-4">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><i class="fa fa-book fa-2x"></i>&nbsp Libreria</h5>
                Creo que vale la pena leer porque los libros ocultan países maravillosos que ignoramos, contienen experiencias que no hemos vivido jamás. Uno es indudablemente más rico después de la lectura.<br><br> <b>Adolfo Bioy Casares</b>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/tienda">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="/about">Acerca</a></li>
                </ul>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2016 Andrés Hernández Jiménez
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/andreshj"><i class="fa fa-facebook-square fa-2x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="https://twitter.com/Andrs10191"><i class="fa fa-twitter-square fa-2x"></i></a>
            </div>
        </div>
  	</footer>
  <script src="/js/jquery-2.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.16/vue-resource.min.js"></script>
  <script src="/js/materialize.min.js"></script>
  <script src="/js/app.js"></script>
  @yield('scripts')
</body>
</html>