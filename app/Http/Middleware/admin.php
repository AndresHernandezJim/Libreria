<?php

namespace App\Http\Middleware;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //lógica del midleware
            //pregunta si no existe la variable de sesion
            if(!session()->has('administrador')){
                return back();
                //si no existe retorna a login
            }
        return $next($request);
        // si existe continual el flujo
    }
}
