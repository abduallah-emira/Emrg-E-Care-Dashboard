<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\DashTable1Retrive;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as FacadesDB;

class usersController extends Controller
{
    
    public function users(){
        
        $user_models = FacadesDB::select('select * from user_models');
        return view('pages.usersTable',['user_models'=>$user_models]);
        
    }
  
}
