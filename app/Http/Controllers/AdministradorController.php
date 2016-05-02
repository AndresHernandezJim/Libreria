<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdministradorController extends Controller
{
	public function index(Request $request){
		return view('admuser/admin');
	}

	public function logout(){
		//session()->forget('administrador');

		//$value = Cache::pull('key');
        session()->flush();
        //Auth::logout();
		return redirect('/ingresar');

	}
}