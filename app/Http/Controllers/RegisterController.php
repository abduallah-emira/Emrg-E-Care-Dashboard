<?php

namespace App\Http\Controllers;

use App\admins;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


     public function RegisterView(){
        return view('pages.register');
    }


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required','digits:11','Numeric'], 
            'age'=>['required','integer'],
            'nId'=>['required','Numeric','digits:14'],
            
        ]);

        $input['password'] = bcrypt($request->password);
        $check=admins::where('email',$request->email)->get()->first();
        if($check){
            return back()->withErrors('email is exit');
        }
        admins::create($input);
        return redirect('loginPage');
    }

    public function adminsView() {
        // $admins = DB::select('select * from admins');
        $admins=new admins;
        $admins=$admins->get();
        return view('pages.adminsView',['admins'=>$admins]);

    }
}
