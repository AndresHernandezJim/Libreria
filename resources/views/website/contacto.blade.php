@extends('templates.website')
@section('content')

<br>
<div class="row">
	<br>
	<div>
     @if(session()->has('created'))
        <p style="color: green;">Mensaje guardado</p>
      @endif
      <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>   
        @endforeach
      </ul>
		<form action="/mensajes" method="POST" class="col s12">
    {{ csrf_field() }}
			<div class="row">
        		<div class="input-field col s12">
          			<input id="Nombre" type="text" class="validate" name="nombre">
          			<label for="Nombre">nombre</label>
        		</div>
        		
      		</div>
      		<div class="row">
	        	<div class="input-field col s12">
	          		<input id="email" type="email" class="validate" name="email">
          			<label for="email">Email</label>
        		</div>
      		</div>
      		<div class="row">
        		<div class="input-field col s12">
          			<textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
         			<label for="mensaje">Mensaje</label>
        		</div>
      		</div>
      		<div class="row">
 				 <button class="btn waves-effect waves-light" type="submit" name="action">Enviar&nbsp <i class="fa fa-paper-plane"></i>
</button>
      		</div>
		</form>
	</div>
	

</div>


@stop
