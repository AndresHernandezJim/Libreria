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
         
        if ($request->hasFile('image')) {
            //mandamos subir el archivo con el upload
            $fileystem= Filesystem::upload($file);
            if(!$fileystem){
                return back()->with('error-file', true);
            }
            $insertar=RepositoryLibro::store($request,$fileystem);
           

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
  
    
      
    
     
}
