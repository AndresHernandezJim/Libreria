@extends('templates.administrator')

@section('navegacion')
  
  <div class="row">
    <div id="navegacion" class="col s12">
      <a href="/administrador">Menú principal</a>
      <span class="space">|</span>
      <a class="nav-active">panel de usuarios</a>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h5><b>Usuarios del Sistema</b></h5>
      <!-- <label>@{{titulo}}</label> -->
     
    </div>
  </div>
@stop
@section('content')
<div class="col s10 m6">
<div class="row">
  <div class="col s12 m6 l6">
    <a href="/administrador/Usuarios/registrar" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3 class="color-item"><b><i class="fa fa-user-plus"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong class="color-item">Registrar</strong>
            </h5>
            <h6 class="color-subitem">Ingresa nuevos usuarios</h6>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="col s12 m6 l6">
    <a href="/administrador/usuarios/usuarios" class="item">
      <div class="card-panel grey lighten-4">
        <div class="row">
          <div class="col s2">
            <h3><b><i class="fa fa-users" aria-hidden="true"></i></b></h3>
          </div>
          <div class="col s10">
            <h5>
              <strong>Ver</strong>
            </h5>
            <h6>Usuarios Registrados</h6>
          </div>
        </div>
      </div>
    </a>
  </div>


  
</div>

</div>
@stop
