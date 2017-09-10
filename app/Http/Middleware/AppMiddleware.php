<?php
 namespace App\Http\Middleware;

use Closure, Session, Auth;

class AppMiddleware {

    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['fr','ar'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('locale'))
        {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
            Session::save();
        }


        \App::setLocale(session('locale'));
       

        // if(!Session::has('statut')) 
        // {
        //     Session::put('statut', Auth::check() ?  Auth::user()->role->slug : 'visitor');
        // }

        return $next($request);
    }

}