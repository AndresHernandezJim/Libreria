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
	get('/getlibros','LibrosController@show');
	Route::group(['middleware'=>'admin'],function(){
		get('/administrador','AdministradorController@index');
		get('/logout','AdministradorController@logout');
		get('/administrador/libros','LibrosController@index'); 
		get('/administrador/libros/create',function(){
			return view('admuser/libros/create');
		}); 
		get('/administrador/Usuarios/registrar',function(){
			return view('/admuser/Users/regusuarioad');
		});
		get('/administrador/usuarios/usuarios',function(){return view('admuser/Users/registrados');});
		get('/usuarios',function(){return view('admuser/Users/panelusuarios');});
		/*insersion de libros*/
		post('/administrador/libros/registrar','LibrosController@store');
		/*idiomas*/
		get('/administrador/libros/create/idiomas', 'LibrosController@idiomas');
		post('/administrador/libros/create/storeIdioma', 'idiomaController@storeIdioma');
		post('/administrador/libros/create/deleteIdioma', 'idiomaController@deleteIdioma'); 
		/*editoriales*/
		get('/administrador/libros/create/editoriales', 'LibrosController@editoriales');
		post('/administrador/libros/create/storeEditorial','editorialController@storeEditorial');
		post('/administrador/libros/create/deleteEditorial','editorialController@deleteEditorial');
		/*autores*/
		get('/administrador/libros/create/autores', 'LibrosController@autores');
		post('/administrador/libros/create/storeAutor', 'autorController@storeAutor');
		post('/administrador/libros/create/deleteAutor','autorController@deleteAutor');
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