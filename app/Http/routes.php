<?php

	get('/', function () {
    	return view('website/Index');
    });
	get('/tienda',function(){
    	return view('website/tienda');
	});
	get('/carrito',function(){
		return view('website/carrito');
	});
	/*get('/login',function(){
		return view('website/login');
	});*/
	get('/ingresar','loginController@index');
	get('/about',function(){
		return view('website/about'); 
	});
	get('/contacto',function(){
		return view('website/contacto');
	});
	get('/registro',function(){
		return view('website/registrousuario');
	});
	get('/otropago',function(){
		return view('website/formaspago');
	});
	get('/regadmin',function(){
		return view('admuser/regusuarioad');
	});
	//post('/form','ambientesController@store');
	//controladores          //nombredelcontrolador@nombredelprocedim
	POST('/controller','ambientesController@store');	
	POST('/mensajes','MensajesController@store');
	//POST('/logeo','loginController@index');
	POST('/logeo','loginController@store');
	get('/admin',function(){return view('website/admin');});
	POST('/salir','loginController@salir');
	POST('/controller2','ambientesController@store2');
	get('administrador/panel','AdministradorController@index');
	get('/users',function(){return App\User::all();});
	Route::group(['middleware'=>'admin'],function(){
		get('/administrador','AdministradorController@index');
		get('/logout','AdministradorController@logout');
		get('/administrador/libros','LibrosController@index'); 
		get('/administrador/libros/create',function(){
			return view('admuser/libros/create');
		});
		/*
		post('/administrador/idioma','idiomaController@store');
		post('/administrador/RegistroAutor','autorController@store');
		post('/administrador/registroEdit','editorialController@store');
		post('/administrador/libros/guardar','LibrosController@store');*/
		 /*post('/administrador/libros/autor',function(){
	    	return App\autor::create(Request::all());
	    });*/
	    post('/administrador/libros/autor','autorController@store');
	    post('/administrador/libros/editorial',function(){
	    	return App\editorial::create(Request::all());
	    });
	    post('/administrador/libros/idioma',function(){
	    	return App\idioma::create(Request::all());
	    });
	    get('/administrador/libros/getAutores', function() {
	    	return \App\autor::all();
	    });
	   	
	});

/*
  // consulta para insertar el libro
	get('/consulta', function(){
+
+	try{
+		\DB::beginTransaction();
+	// Eloquent
+		$libro = new App\Libro;
+			$libro->titulo = 'El alquimista';
+			$libro->edicion = 'Segunda';
+			$libro->paginas = 350;
+			$libro->precio = 180.5;
+			$libro->isbn = 'ABCDS';
+			$libro->editorial_id_editorial = 1;
+			$libro->Idioma_id_Idioma = 1;
+			$libro->descuento = "";
+			$libro->Imagen = 'imagen.jpg';
+			$libro->save();
+
+		$autor = new App\autor;
+			$autor->Nombre = "Paulo Cohello";
+			$autor->save();
+
+		if(is_object($libro) && is_object($autor)) {
+			$detalle = \DB::table('Autor_has_Libro')->insert([
+				"Autor_idAutor" => $autor->id,
+				"Libro_id_libro" => 15
+			]);
+		}
+		\DB::commit();
+		return "Exito";
+	}  catch(Exception $ex) {
+			\DB::rollback();
+			return "Fail";
+	}
 }); */