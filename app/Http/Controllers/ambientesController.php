<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    //
    public function index(){
    	return "ambientesController";
    }
    public function show(Request $request){
          
    	return $request->all();
    }

    public function store(Request $request){
    	$usuario=\DB::table('Usuario')->insert([
    			'nombre'=>$request->nombre,
    			'nick'=>  $request->nick,
    			'email'=>$request->email,
    			'pass'=>$request->password,
    			'telefono'=>$request->telefono
    		]);
    	return $request->all();
    	//DB(usuario);
    }
}
