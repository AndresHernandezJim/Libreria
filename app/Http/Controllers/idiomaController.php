<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\idioma;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class idiomaController extends Controller
{
    public function store(Request $request)
    {  
        $this->validate($request,['nombre'=>'required|min:3']);
        return idioma::create($request->all());
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

    public function destroy($id)
    {
        $delete = \DB::table('Idioma')
            ->where('id_Idioma', $request->id_Idioma)
            ->delete();
        if($delete){
            return $delete;
        }
    }
}
