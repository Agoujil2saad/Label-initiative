<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
          $url = $request->path();

        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
    {
            return $next($request);
    }

        if ($request->is('projets/create'))//If user is creating a projet
         {
            if (!Auth::user()->hasPermissionTo('Edit Projet'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }

          

          if (str_contains($url,'espace_porteur'))//If user is creating a projet
         {
            if (!Auth::user()->hasPermissionTo('Porteur De Projet Tools'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }
        
        if (str_contains($url,'evenement'))//If user is creating a projet
         {
            if (!Auth::user()->hasPermissionTo('Porteur De Projet Tools'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }


        if ($request->is('projet/*/edit')) //If user is editing a projet
         {
            if (!Auth::user()->hasPermissionTo('Edit Projet')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a projet
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