<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\libroRequest;
use App\Http\Controllers\Controller;
use App\editorial;
use App\idioma;
use App\autor;
class LibrosController extends Controller
{
  public function index()
    {
        return view('admin.libros.index');
    }
    public function create(){
      return view('admin.libros.create');
    }
    
    public function store(Requests $request){
       $file = $request->file('image'); 
        if ($request->hasFile('image')) {
            dd($file);
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
