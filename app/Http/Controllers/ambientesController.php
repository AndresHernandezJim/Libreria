<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\usuarioRequest;

use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    //
    public function index(){
    	return "ambientesController";
    }
   
    public function store(usuarioRequest $request){
        $contra=\Hash::make($request->password);
    	$usuario=\DB::table('Usuario')->insert([
    			'nombre'=>$request->nombre,
    			'nick'=>  $request->nick,
    			'email'=>$request->email,
    			'password'=>$contra,
    			'telefono'=>$request->telefono
    		]);
    	return view ('website/newuser');
    	//DB(usuario);
    }

    public function store2(usuarioRequest $request){
        $contra=\Hash::make($request->password);
        $usuario=\DB::table('Usuario')->insert([
                'nombre'=>$request->nombre,
                'nick'=>  $request->nick,
                'email'=>$request->email,
                'password'=>$contra,
                'telefono'=>$request->telefono,
                'tipo'=>1
            ]);
        return view ('admuser/admin');
        //DB(usuario);
    }
}
