<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\libroRequest;
use App\Http\Controllers\Controller;
use App\editorial;
use App\idioma;
class LibrosController extends Controller
{
  public function index(){

     return view('admuser/libros/index'); 
  }
  public function create()
    {
        //$editorial=editorial::all();
        //$idioma=idioma::all();
        //,['idioma'=>$idioma->toArray()]
        return view('administrador/libros/create');
    }
    public function store(libroRequest $request)
    {
        //dd($request->all());
        $file = $request->file('image');  
        if ($request->hasFile('image')) {
            dd($file);
        }
        return back()->with('error-file', true);
    }
}
