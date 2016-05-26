<?php

namespace App\Repositorios;
use App\AutorhasLibro;

class RepositoryAutores
{
	static function Insertarautorlibro($autores,$libro){
		//dd($libro);
		$cont=0;
		for($i=0;$i<=sizeof($autores)-1;$i++){
			/*$autorlibro=new AutorhasLibro;
			$autorlibro->Autor_idAutor=$autores[$i];
			$autorlibro->Libro_id_libro=$libro->id;
			$autorlibro->save();
			$cont+=1;*/
			
			$autorlibro=\DB::table('Autor_has_Libro')->insert(['Autor_idAutor'=>$autores[$i],'Libro_id_libro'=>$libro->id,]);
		}
		

		return true;
	}
	
}