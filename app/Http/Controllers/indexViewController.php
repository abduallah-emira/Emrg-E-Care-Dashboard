<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashTable1Retrive;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\newRequestsTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class indexViewController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index(){

        $totalRequests=DashTable1Retrive::countTotalRequests();
        $processingRequests=DashTable1Retrive::countProcessingRequests();
        $terminatedRequests=DashTable1Retrive::countTerminatedRequests();
        $requests = newRequestsTable::with('users')->get();
        $users = DashTable1Retrive::with('requests')->get();

        return
        
         view('pages.index',compact('requests', 'users','totalRequests','processingRequests','terminatedRequests'));
    
      
    }

  
    public function checkRequests()
    {
        // Assuming you have the necessary table names and column names
        $newRequestsTable = 'new_requests_tables';
        $terminatedRequestsTable = 'terminated_requests';
        $statusColumn = 'status';
        

        // Retrieve all rows from the new requests table with status = 0
        $rows = DB::table($newRequestsTable)
            ->where($statusColumn, 0)
            ->get();

        foreach ($rows as $row) {
            $status = $row->$statusColumn;

            if ($status == 0) {
                 // Move the row to the terminated requests table
                // DB::table($terminatedRequestsTable)
                //     ->insert((array) $row);

                // Delete the row from the new requests table
                DB::table($newRequestsTable)
                    ->where('id', $row->id)
                    ->delete();

            
        }

       
    }

    return Redirect::route('index');
    
    
}
}
