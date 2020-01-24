<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        /**este metodo permite saber si un user ha iniciado sesion o no
        if(!auth()->check())
        {
            //sino inicio sesion 
            //lo va a redirigir a esta ruta:
            return redirect('/login');
        } */
          /**  si ha logeado, esta funcion permite verficar si es user es un admin*/
       
        if(!auth()->user()->admin)
        {
            //sino es admin lo redirige a esta ruta
            return redirect('/');
        }
        return $next($request);
    }
}
