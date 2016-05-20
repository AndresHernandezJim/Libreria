@extends('templates.administrator')

@section('navegacion')
<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador">Menú principal</a>
			<span class="space">|</span>
			<a href="/usuarios">Panel de usuarios</a>
			<span class="space">|</span>
			<a class="nav-active">Usuarios registrados</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Usuarios Registrados</b></h5>
			<!-- <label>@{{titulo}}</label> -->
		
		</div>
	</div>
@stop
@section('content')
 	<br>
 	<br>
 	<h5> ahi vamos</h5>
@stop