@extends('templates.administrator')
@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador">Menú principal</a>
			<span class="space">|</span>
			<a href="/administrador/libros">Libros</a>
			<span class="space">|</span>
			<a class="nav-active">Registrar libro</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Registrar libro</b></h5>
			<!-- <label>@{{titulo}}</label> -->
		</div>
	</div>
@stop
 
@section('content')
<div class="row">
	 <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach
      </ul>
	<form action="/administrador/libros/guardar" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="col s12 l9">
			<div class="card-panel">
				<div class="row">
					<div class="input-field col s12">
			        	<input id="titulo" type="text" class="validate" name="titulo" v-model="titulo">
			        	<label for="titulo">Titulo de libro</label>
        			</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s12 l6">
			        	<input id="edicion" type="text" class="validate" name="edicion">
			        	<label for="edicion">Edición</label>
        			</div>
        			<div class="input-field col s12 l6">
			        	<input id="paginas" type="number" class="validate" name="paginas">
			        	<label for="paginas">Paginas</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
			        	<input id="precio" type="number" class="validate" name="precio">
			        	<label for="precio">Precio</label>
        			</div>
        			<div class="input-field col s12 l6">
			        	<input id="isbn" type="text" class="validate" name="isbn">
			        	<label for="isbn">ISBN</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
    					<select name="editorial_id_editorial">
      						<option value="" disabled selected>Seleccione</option>
      						<?php 
      						use App\editorial;
      						$editorial=editorial::all();
      						foreach ($editorial as $editor) {
							echo '<option value="'.$editor['id_editorial'].'">'.$editor['nombre'].'</option>';}
							?>
      						
    					</select>
    					<label>Editorial</label>
  					</div>
					<div class="input-field col s6">
    					<select name="Idioma_id_Idioma">
      						<option value="" disabled selected>Seleccione</option>
      						<?php
      						use App\idioma;
      						$idiomas=idioma::all();
      						foreach ($idiomas as $idioma) {
							echo '<option value="'.$idioma['id_Idioma'].'">'.$idioma['nombre'].'</option>';}
      						?>
    					</select>
    					<label>Idioma</label>
  					</div>
  					
				<div class="row">
					<div class="input-field col s12 l6">
			        	<input id="descuento" type="number" class="validate" name="descuento">
			        	<label for="descuento">Descuento</label>
        			</div>
				</div>
				<div class="row">
					<div class="file-field input-field col s12 l12">
						<div class="btn">
					        <span>Imagen</span>
					        <input type="file" name="image">
					    </div>
					    <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					    </div>
        			</div>
				</div>
				
					<div class="col s12">
						<button type="submit" class="waves-effect amber darken-3 btn right">Registrar</button>
					</div>
				</div>
	    	</div>
		</div>
		<div class="col s12 l3">
			<div class="card-panel">
				<center>
			        <h5>Idiomas</h5>
			        <label>Lista de idiomas</label><br>
			        <a href="/administrador/regiIdioma">Registrar Idioma</a>
			        <hr>
			        <h5>Editorial</h5>
			        <label>Lista de editoriales</label><br>
			        <a href="/administrador/regEditorial">Registrar Editorial</a>
			        <hr>
			        <h5>Autores</h5>
			        <label>Lista de autores</label><br>
			        <a href="/administrador/regAutor">Registrar Autor</a>
		        </center>
	    	</div>
		</div>
	</form>
</div>
@stop
@section('scripts')

<script >
//jQuery
	/*$(function(){
		alert("Vamos a registrar");
	});*/

//VUE JS
	new Vue({
		el:"body",  //elemento sobre el que se va a trabajar
		data:{
			//titulo:""
		},
		ready: function(){ //metodo 
			//alert("hola vue.js");

		},
	});

</script>

@stop