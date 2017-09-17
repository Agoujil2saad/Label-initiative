<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {

    public function handle($request, Closure $next) {
        $url = $request->path();

        if(str_contains($url,'espace_partenaire'))
        {
            if(!Auth::user()->hasRole('Partenaire Projet'))
            {
                abort('401');
            }
            else
            {
                return $next($request);
            }
        }

        if($request->is('message/*'))
        {
            if(!Auth::user()->hasRole('Partenaire Projet') || !Auth::user()->hasRole('Porteur de Projet'))
            {
                abort('401');
            }
            else
            {
                return $next($request);
            }
        }

        if (str_contains($url,'espace_porteur'))
        {
            if (!Auth::user()->hasRole('Porteur de Projet'))
            {
                abort('401');
            } 
            else
            {
                return $next($request);
            }
        }

        if ($request->is('projet/*/edit'))
         {
            $projet_id = $request->route()->parameter('projet');
            if(Auth::user()->projet->id == $projet_id){
                if (!Auth::user()->hasPermissionTo('Edit Projet')) {
                    abort('401');
                } else {
                    return $next($request);
                }
            } else {
                return redirect('/');
            }
        }

        if($request->is('evenement/*') or $request->is('partenaire/*') or $request->is('users/*')
            or $request->is('projet/create'))
        {
            if (Auth::user()->hasPermissionTo('Administer roles & permissions'))
            {
                return $next($request);
            }
            else
            {
                abort('401');
            }
        }

        if ($request->isMethod('Delete'))
         {
            if (!Auth::user()->hasPermissionTo('Delete Projet')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}