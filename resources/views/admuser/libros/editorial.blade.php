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
			<a class="nav-active">Registro Editorial</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Registrar Editorial</b></h5>
		</div>
	</div>
@stop
 
@section('content')
<div class="card-panel">
	<div class="center">
		 @if(Session::has('exito'))
             <p class="error">Editorial registrada</p>
         @endif
		<form action="/administrador/registroEdit" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6">
         			<input id="first_name" type="text" class="validate" name="nombre">
          			<label for="first_name">Nombre de la editorial</label>
        		</div>
        
			</div>
			<div class="row">
				<div class="input-field col s6">

         			 <input id="last_name" type="text" class="validate" name="telefono">
          			<label for="last_name">Telefono</label>
        		</div>
			</div>
			<div class="row">
				<button type="submit" class="waves-effect waves-light btn ">Registrar</button>
			</div>
		</form>
	</div>
</div>
@stop