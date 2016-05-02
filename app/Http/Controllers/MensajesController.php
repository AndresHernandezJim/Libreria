<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\mensajeRequest;
use App\Mensaje;
use App\Http\Controllers\Controller;

class MensajesController extends Controller
{
    /*Public function store(Request $request){
    	$mensaje=\DB::table('mensaje')->insert([
    			'nombre'=>$request->nombre,
    			'email'=>$request->email,
    			'mensaje'=>$request->mensaje,
    			'updated_at'=>DATE('Y-m-d H:i:s')
    			'created_at'=>DATE('Y-m-d H:i:s')
    		]);
    	return view ('website/contacto');
    }*/
    public function store(mensajeRequest $request){

        $mensaje = Mensaje::create($request->all());
       if($mensaje) {
            return view('website/Index');
       }
    
    }
}
