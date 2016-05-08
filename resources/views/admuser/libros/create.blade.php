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
	<div class="col s12 l9">
	 <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach
      </ul>
		<div class="card-panel form-libro">
			<form action="/administrador/libros/guardar" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
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
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
			        	<input id="descuento" type="number" class="validate" name="descuento">
			        	<label for="descuento">Descuento</label>
        			</div>
        			<div class="input-field col s6">
    					<select name="Idioma_id_Idioma" v-for="autor in listautores">
      						<option value="@{{autor.idAutor}}">@{{autor.Nombre}}</option>
    					</select>
    					<label>Autor</label>
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
				<div class="row">
					<div class="col s12">
						<button type="submit" class="waves-effect amber darken-3 btn right">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col s12 l3">
		<div class="card-panel">
			<center>
				<div class="card-panel ">
					<div class="row">
			 			<div class="input-field col s12">
			        		<input id="nombre" type="text" class="validate" name="nombre"v-model="newidioma.nombre" v-on:keyup.enter="idioma">
			        		<label for="nombre">Idioma</label>
        				</div>
			 		</div>
				</div>
				<div class="card-panel">
					<div class="row">
			 			<div class="input-field col s12">
			        		<input id="nombre" type="text" class="validate" name="nombreedit" v-model="newedit.nombre" v-on:keyup.enter="editor">
			        			<label for="nombre">Editorial</label>
        				</div>
			 		</div>
				</div>
				<div class="card-panel">
			 		<div class="row">
			 			<div class="input-field col s12">
			        		<input id="nombre" type="text" class="validate" v-model="newautor.Nombre" v-on:keyup.enter="autor">
			        		<label for="nombre">Autor</label>
        				</div>
			 		</div>
			 		<ul v-for="autor in listautores">
			 			<li>@{{autor.Nombre}}</li>
			 		</ul>
				</div>
			</center>
		</div>
	</div>
</div>


@stop
@section('scripts')

<script >
//jQuery
	/*$(function(){
		alert("Vamos a registrar");
	});*/

//VUE JS
	Vue.http.headers.common['X-CSRF-TOKEN'] =  $('[name=_token]').val();
	new Vue({
		el:"body",  //elemento sobre el que se va a trabajar
		data:{
			//titulo:""
			newautor: {
					Nombre:'',
				},
			newedit:{
					nombre:'',
					telefono:'',
				},
			newidioma:{
					nombreedit:'',
			},
			listautores:[]
		},
		ready: function(){ //metodo 
			// consultar autores, idiomas y editoriales
			this.autores();

		},
		methods:{
			idioma: function(e){
				this.$http.post('/administrador/libros/idioma',{'nombre':this.newidioma});
				this.newidioma={nombre:''};
				Materialize.toast('Idioma agregado',3000,'rounded')
				reload();
			},
			editor: function(){
				this.$http.post('/administrador/libros/editorial',{'nombre':this.newautor});
				this.newedito = {nombre: ''};
				Materialize.toast('Editorial agregada', 3000, 'rounded');
			},

			autor: function(){
				this.$http.post('/administrador/libros/autor',{'Nombre':this.newautor}).then(function(response){
					this.newautor.Nombre='';
					Materialize.toast('Autor agregado', 3000, 'rounded');
				},function(error){
					Materialize.toast('No fue posible registrar al autor',3000,'rounded');
				});
				
			},
			autores: function() {
				
				this.$http.get('/administrador/libros/getAutores').then(function(autores) {
					this.$set('listautores', autores.data);
				}.bind(this));


			}
		},
	});
	/*
		getidiomas: function(){
			this.$htto.get('ruta').then(function(){
				this.$set('idioma',response.data);
			});
		}

		storeidioma: function(){
			this.$http.post('ruta',parametroaenviar).then(function(response){
	
			},funtion(error){
	
			}),
		}

	*/
</script>

@stop