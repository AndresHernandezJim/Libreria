<?php
namespace App\Repositorios;
use App\Libro;
class RepositoryLibro
{
	static function store($request,$path) {
		//dd($request->all());
		$libro=new Libro;
		$libro->titulo=$request->titulo;
		$libro->edicion=$request->edicion;
		$libro->paginas=$request->paginas;
		$libro->precio=$request->precio;
		$libro->isbn=$request->isbn;
		$libro->editorial_id_editorial=$request->editorial_id_editorial;
		$libro->Idioma_id_Idioma=$request->Idioma_id_Idioma;
		$libro->Descuento=$request->descuento;
		$libro->Imagen=$path;
		/*completar todos revisa los nombres en la bd y enlos request*/
		//dd($libro);
		if($libro->save()){
			return $libro; 
			//return true;
	}return false;
	
}
	static function show(){
		$libro=\DB::table('Libro')
            ->join('editorial', 'Libro.editorial_id_editorial', '=', 'editorial.id_editorial')
            ->join('Idioma', 'Libro.Idioma_id_Idioma', '=', 'Idioma.id_idioma')
            ->select('Libro.id_libro','Libro.titulo','Libro.edicion','Libro.paginas','Libro.precio','Libro.isbn','editorial.Nombre','Idioma.nombre','Libro.Imagen')
            ->get();
        return $libro;
	}
}