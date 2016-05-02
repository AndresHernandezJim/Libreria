@extends('templates.website')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col m5 img-newusr">
           	<img id="new-usr" src="/img/6.jpg">
        </div>
        <div class="col m5">
            <h2 class="center-align">Registrate</h2>
            <div class="row">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>   
                @endforeach
            </ul>
                <form class="col s12" action="/controller" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label>Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nick">
                            <label>Nick</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email">
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password">
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="tel" class="validate" name="telefono">
                            <label for="pass">Telefono</label>
                        </div>
                    </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            
                                <button class="btn waves-effect waves-light" type="submit" name="action">Registrame &nbsp<i class="fa fa-arrow-right"></i>
 	 							</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop