<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashTable1Retrive;
use App\terminatedRequests;
use App\spots;
use App\destinantion;
use App\drivers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB ;

class terminatedRequestsViewController extends Controller
{
   
    public function viewTerminatedRequests(){
        

        $table = 'terminated_requests';

            $terminatedRequests = DB::table($table)

            
             ->join('user_models', 'terminated_requests.user_model_id', '=', 'user_models.id')
             ->join('ambulance_spots', 'terminated_requests.ambulance_spot_id', '=', 'ambulance_spots.id')
             ->join('ambulance_drivers', 'terminated_requests.driver_id', '=', 'ambulance_drivers.id')
             ->join('destinations', 'terminated_requests.destination_id', '=', 'destinations.id') 
            ->get();

            return view('pages.terminantedRequests',compact('terminatedRequests'));


        // $terminatedRequests = DB::table('terminated_requests')
        // ->join('user_models', 'terminated_requests.user_model_id', '=', 'user_models.id')
        // ->join('ambulance_spots', 'terminated_requests.ambulance_spot_id', '=', 'ambulance_spots.id')
        // ->join('ambulance_drivers', 'terminated_requests.driver_id', '=', 'ambulance_drivers.id')
        // ->join('destinations', 'terminated_requests.destination_id', '=', 'destinations.id') 
        // ->get();
        //  return view('pages.terminantedRequests',compact('terminatedRequests'));


        
    
    }
   






   
}
