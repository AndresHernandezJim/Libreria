@extends('templates.administrator')
@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador">Menú principal</a>
			<span class="space">|</span>
			<a href="/administrador/libros">Libros</a>
			<span class="space">|</span>
			<a href="/administrador/libros/create" >Registrar libro</a>
			<span class="space">|</span>
			<a class="nav-active">Registro Idioma</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h4><b>Registrar Idioma</b></h4>
		</div>
	</div>
@stop
 
@section('content')
<div class="card-panel">
	<div class="center">
		 @if(Session::has('exito'))
             <p class="error">idioma registrado</p>
         @endif
		<form action="/administrador/idioma" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6">
         			 <input id="last_name" type="text" class="validate" name="nombre">
          			<label for="last_name">Idioma</label>
        		</div>
			</div>
			<div class="row">
				<button type="submit" class="waves-effect waves-light btn ">Registrar</button>
			</div>
		</form>
	</div>
</div>
@stop