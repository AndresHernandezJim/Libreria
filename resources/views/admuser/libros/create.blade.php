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
				@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>   
                @endforeach

		<form action="/administrador/libros/registrar" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
					
			
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
	        			<div class="input-field col s12 l3">
				        	<input id="paginas" type="number" class="validate" name="paginas">
				        	<label for="paginas">Paginas</label>
	        			</div>
	        			<div class="input-field col s12 l3">
				        	<input id="precio" type="number" step="any" class="validate" name="precio">
				        	<label for="precio">Precio</label>
	        			</div>
					</div>
					<div class="row">
						
	        			<div class="input-field col s12 l6">
				        	<input id="isbn" type="text" class="validate" name="isbn">
				        	<label for="isbn">ISBN</label>
	        			</div>
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
					<div class="row">
						<div class="col s12">
						<input type="hidden" name="editorial_id_editorial" value="@{{id_editorial}}"></input>
						<input type="hidden" name="Idioma_id_Idioma" value="@{{id_idiomas}}"></input>
						<input type="hidden" name="id_Autores" value="@{{id_Autores}}">
					

							<button type="submit" class="waves-effect waves-light btn right">Registrar</button>
						</div>
					</div>
		    	</div>
		</form>
		</div>
			<div class="col s12 l3">
			@include('admuser.libros.tarjetas')
			
				<ul class="collapsible" data-collapsible="accordion">
					<li> {{--cardpanel de idiomas usa radio, y ajax para los elementos--}}
				      	<div class="collapsible-header active"><i class="fa fa-language" aria-hidden="true"></i>
				      		<b class="left">IDIOMAS</b>
				      	</div>
				      	<div class="collapsible-body">
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarIdioma">Agregar idioma</a>
						      	</center>
						      	<br>
				      		<ul class="itemsIdioma" v-for="idioma in idiomas" font size="1">
			      				<input class="with-gap" type="radio" id="test@{{$index}}"name="id_idiomas" v-model="id_idiomas"value="@{{idioma.id_idioma}}"/>
					      		<label  for="test@{{$index}}">@{{idioma.nombre}}&nbsp</label>
					      		<a v-on:click="removeIdioma(idioma)" class="remover-idioma">&#10007;</a>
						    </ul>
				      	</div>
				    </li>
				    <li>
				      	<div class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i><b>AUTORES</b></div>
				      	<div class="collapsible-body">
				      		
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarAutor">Agregar Autor</a>
						      	</center>
				   				<br>
				      		<ul class="itemsIdioma" v-for="autor in autores">
			      				<input class="with-gap" type="checkbox" id="test2@{{$index}}" v-on:click="cargaautores(autor.idAutor,$index)"/>
					      		<label for="test2@{{$index}}">@{{autor.Nombre}}&nbsp</label>
					      		<a v-on:click="removeAutor(autor)" class="remover-idioma">&#10007;</a>
						    </ul>
				      	</div>
				    </li>
				     <li>
				      	<div class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i><b>EDITORIALES</b></div>
				      	<div class="collapsible-body">
				      		
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarEditorial">Agregar editorial</a>
						      	</center>
				      			<br>
				      		<ul class="itemsIdioma" v-for="editorial in editoriales">
			      				<input class="with-gap" type="radio" id="test3@{{$index}}" name="id_editorial" v-model="id_editorial" value="@{{editorial.id_editorial}}" />
					      		<label for="test3@{{$index}}">@{{editorial.Nombre}}&nbsp</label>
					      		<a v-on:click="removeEditorial(editorial)" class="remover-idioma">&#10007;</a>
						    </ul>
				      	</div>
				    </li>
				</ul>
			</div>
	</div>
	@if(Session::has('exito'))
       <p class="exito">Libro Almacenado en la BD</p>
    @endif
@stop
@section('scripts')
	<script src="/js/createlibros.js"></script>
@stop