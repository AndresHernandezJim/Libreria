@extends('templates.website')

@section('content')
<div class="center">
    <h4><b>Libros en existencia</b></h4>
    <br><br><br><br>
</div>

  <div class="row">

      <div class="col l2" v-for='libro in libros'> 
         <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <img class="activator imglibro " src="@{{libro.Imagen}}">
          </div>
          <div class="card-content">
              <p class="card-title activator "><FONT FACE="arial" SIZE=2 COLOR=black>@{{libro.titulo}}</FONT><i class="material-icons right"></i></p>
              <p><a class="btn waves-effect waves-light" v-on:click="agregar(@{{$libro.id_libro}})" href="#"><font size=2>Agregar al carrito </font></a></p>
          </div>
          <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Información<i class="material-icons right">Cerrar</i></span>
              <br><br>
              Titulo:  @{{libro.titulo}}<br><br>
              Edición: @{{libro.edicion}}<br><br>
              paginas: @{{libro.paginas}}<br><br>
              Precio:  $@{{libro.precio}} <br><br>
              ISBN:    @{{libro.isbn}}<br><br>
              Editorial:  @{{libro.editorial}}<br><br>
              Idioma:  @{{libro.idioma}}<br><br>
          </div>
      </div>
        
      </div>
     
  </div>

@stop
@section('script')
<script src="/js/getlibros.js"></script>
@stop

