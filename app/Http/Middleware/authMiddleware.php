<?php

namespace App\Http\Middleware;

use App\admins;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class authMiddleware extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     protected function redirectTo($request)
     {   
         if (! $request->expectsJson()) {
             return Route('loginPage');
         }
     }
    public function handle($request, Closure $next, ...$guards)
    {
        $data = admins::where('email', $request->email)->first();
        if (!$data) {
            return back()->withErrors([
                'check email from midd.',
           ]);
           
        }
        $pass=$data->password;
        $check_pass = Hash::check($request->password, $pass);
                if (!$check_pass) {
                    return back()->withErrors([
                        'check password from midd.',
                   ]);
                  
                }
                else{
                    return view('pages.index');
                } 
        
               
                


    }
}
