<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\idioma;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class idiomaController extends Controller
{
      public function storeIdioma(Request $request){
            $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);
        return Idioma::create($request->all());
    }

 
    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function deleteIdioma(Request $request)
    {   
        $delete = \DB::table('idioma')
            ->where('id_idioma', $request->input('id_Idioma'))
            ->delete();
            //->toSql();
        if($delete){
            return $delete;
        }
    } 
}
