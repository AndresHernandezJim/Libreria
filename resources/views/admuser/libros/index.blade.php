@extends('templates.administrator')

@section('navegacion')
  <div class="row">
    <div id="navegacion" class="col s12">
      <a href="/"></a>
      <a href="/administrador">Menú principal</a>
      <span class="space">|</span>
      <a href="/administrador/libros">Libros</a>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h5><b>Menú libros</b></h5>
    </div>
  </div>
@stop
@section('content')
<div class="col s10 m6">
<div class="row">
  <div class="col s12 m6 l6">
    <a href="/administrador/libros/create" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
              <h3 class="color-item"><b><i class="fa fa-pencil-square-o"></i></b></h3>
            </div>
              <div class="col s10">
                <h5><strong class="color-item">Registrar libros</strong></h5>
                <h6 class="color-subitem">Agregar un nuevo libro</h6>
              </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="/administrador/ventas" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
         <div class="col s2">
              <h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
            </div>
              <div class="col s10">
                <h5><strong class="color-item">Consultar</strong></h5>
                <h6 class="color-subitem">Consulta y edita libros</h6>
              </div>
        </div>
      </div>
    </a>
  </div>
  </div>
  
@stop