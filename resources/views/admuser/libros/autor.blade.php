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
			<a class="nav-active">Registro Autor</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Registrar Autor</b></h5>
		</div>
	</div>
@stop
 
@section('content')

<div class="center">
	<div class="card-panel">
	@if(Session::has('exito'))
             <p class="error">Autor registrado</p>
         @endif
	<form action="/administrador/RegistroAutor" method="POST">
		{{ csrf_field() }}
		<div class="col s6 offset-s3">
			<div class="card-panel">
				<div class="row center">
					
					<div class="input-field col s6">
			        	<input id="titulo" type="text" class="validate" name="Nombre">
			        	<label for="titulo">Nombre del Autor</label>
        			</div>
				</div>
				<div class="row center">
					<button type="submit" class="waves-effect waves-light btn ">Registrar</button>
				</div>
				
			</div>
		</div>
	</form>
	</div>
</div>

@stop