<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\libroRequest;
use App\Http\Controllers\Controller;
use App\editorial;
use App\idioma;
use App\autor;
use App\Helpers\Filesystem;
use App\Repositorios\RepositoryLibro;
use App\Repositorios\RepositoryAutores;
use App\Libro;
use App\AutorhasLibro;

class LibrosController extends Controller
{
  public function index()
    {
        return view('/admuser/libros/index');
    }
    public function create(){
      return view('/admuser/libros/create');
    }
    
    public function store(libroRequest $request){
      
        //verificar que exista el archivo
        $file = $request->file('image');
         $aut=explode(",",$request->id_Autores);
     
        if ($request->hasFile('image')) {
            //mandamos subir el archivo con el upload     REvisar la funcion explode de php para la insersion de los autores
            $fileystem= Filesystem::upload($file);
            if(!$fileystem){
                return back()->with('error-file', true);
            }
                $insertar=RepositoryLibro::store($request,$fileystem);
                if(is_object($insertar)){
                    $registroautores=RepositoryAutores::Insertarautorlibro($aut,$insertar);
                    
                }return back()->with('exito',true);
                /*
                $insertar=RepositoryLibro::store($request,$fileystem);$titulo='PHP y Mysql - Domine el desarrollo de un sitio web dinámico ';
                $id=\DB::table('Libro')->select('id_libro')->where('titulo',$request->titulo)->first();
                // dd($id);  //dd($autores);
                $aut=explode(",",$request->id_Autores);//dd($aut);
                for($i=0;$i<=sizeof($aut)-1;$i++){
                    //dd($aut[$i+3]);//dd($id);
                  $autorlibro=\DB::table('Autor_has_Libro')->insert(['Autor_idAutor'=>$aut[$i],'Libro_id_libro'=>$id,]);
                }
               if($insertar){return back()->with('exito',true);}*/
        }
        return back()->with('error-file', true);
    }
    public function idiomas(){
        return idioma::all();
    }
    public function editoriales(){
        return editorial::all();
    }
    public function autores(){
        return autor::all();
    }
  
    public function show(){
        $libro=\DB::table('Libro')
            ->join('editorial', 'Libro.editorial_id_editorial', '=', 'editorial.id_editorial')
            ->join('Idioma', 'Libro.Idioma_id_Idioma', '=', 'Idioma.id_idioma')
            ->select('Libro.id_libro','Libro.titulo','Libro.edicion','Libro.paginas','Libro.precio','Libro.isbn','editorial.nombre as editorial','Idioma.nombre as idioma','Libro.Imagen')
            ->get();
        return $libro;
    }
      
    
     
}
