<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;
class loginController extends Controller
{     

    /*public function _construct(){
        $this->middleware('guest', ['except' => 'getLogout']);
    }*/

    public function index(Request $request){
      
        if(Auth::check()){
            if(Auth::user()->tipo == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    return redirect('/admin/panel');
                }else{
                    return redirect('/');
                }
            } 
            //dd("valgo verga");
        return view('website/login');
    }

    public function store(Request $request){
        if (Auth::attempt(['email' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return redirect('administrador/panel');
                }else{
                    return redirect('/');
                   
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }elseif (Auth::attempt(['nick' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return redirect('administrador/panel');
                }else{
                    return redirect('/');
                    
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }
        //dd("no entro");
            
            return back()->with('error', true); //peromite declarar una variable de sesion flash
    }
}


        //dd($request->all());
         
        //echo "usuario-->".$request->email."<br>";
        //echo "contrasena-->".$request->pass."<br>";
        //$contrasena = \Hash::make($request->pass);
        //echo "contraseña encriptada--->".$contrasena."<br>";

        //dd($request-> all());

        // filtro de usuarios del sistema
      /* if (Auth::attempt(['email' => $request->usuario, 'password' => $request->password])) {
            //return "usuario logeado";
            //return redirect()->intended('index');
            //dd("logeado");
            if(Auth::check()){
                //return Auth::user();//regresa los datos del usuario
                if(Auth::user()->tipo == 1){
                    //dd ("eres admin");
                    return redirect('administrador/panel');
                }else
                {
                    return redirect('/');
                }
            }

            return "no ha cerrado sesion";
        }elseif (Auth::attempt(['nick' => $request->usuario, 'password' => $request->password])) {
            //return "usuario logeado";
            //return redirect()->intended('index');
            //dd("logeado");
            if(Auth::check()){
                //return Auth::user();//regresa los datos del usuario
                if(Auth::user()->tipo == 1){
                    //dd ("eres admin");
                    return redirect('administrador/panel');
                }
                else
                {
                    return redirect('/');
                }
            }

            return "no ha cerrado sesion";
        }else {
            //return redirect('login');
            return back()->with('error',true); //mantiene la ruta anterior y reestablece la pagina en la que se encontraba
            //with() metodo que permite añadir parametros (nombredellamado,parametroaenviar) creando una variable flash
           
        }*/
