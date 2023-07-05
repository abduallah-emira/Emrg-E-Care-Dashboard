<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\logsHistory;
use App\Providers\RouteServiceProvider;
use App\admins;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterAuthRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Notifications\Notifiable;
use Illuminate\Routing\Route;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{

    

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

 
  


    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function loginView(){
        return view('pages.login');
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }


    public function login(Request $request)
{

     
    $data = admins::where('email', $request->email)->first();
    
    if (!$data) {
        return back()->withErrors([
            'check email from controller.',
       ]);
    }
    $pass=$data->password;
    $check_pass = Hash::check($request->password, $pass);
            if (!$check_pass) {
                return back()->withErrors([
                    'check password from controller.',
               ]);
            } 
     else {
        
        logsHistory::create([
            'adminid'=>$data->id
        ]);
        
        return Redirect::to('index');
        }
    }
      
// $input = $request->only('email', 'password');
// $jwt_token = null;
// if (!$jwt_token = JWTAuth::attempt($input)) {
// return response()->json([
// 'success' => false,
// 'message' => 'Invalid Email or Password',
// ], Response::HTTP_UNAUTHORIZED);
// }
// return response()->json([
// 'success' => true,
// 'token' => $jwt_token,
// ]);
// }

// public function logout(Request $request)
// {
// $this->validate($request, [
// 'token' => 'required'
// ]);
// try {
// JWTAuth::invalidate($request->token);
// return response()->json([
// 'success' => true,
// 'message' => 'User logged out successfully'
// ]);
// } catch (JWTException $exception) {
// return response()->json([
// 'success' => false,
// 'message' => 'Sorry, the user cannot be logged out'
// ], Response::HTTP_INTERNAL_SERVER_ERROR);
// }


                   
    




 
    // if (auth()->attempt(\Request()->onl);y(['email','password']))) {
    //     return redirect('/index');


    // }
    
    // else


    // 



   

    
}
