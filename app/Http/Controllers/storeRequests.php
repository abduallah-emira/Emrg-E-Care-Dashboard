<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class storeRequests extends Controller
{
  
    public function storeRequests(Request $request)
    {
        $input = $request->all();
        $request->validate([

            'status'=>'required',
            
            
        ]);
        
        
 
}

public static function moveRequestToTerminatedTable($new_requests_tables_Id)
{
    // Assuming you have the necessary table names and column names
    $newRequestsTable = 'new_requests_tables';
    $terminatedRequestsTable = 'terminated_requests';
    $statusColumn = 'status';
    
    // Retrieve the request row from the new requests table
    $row = DB::table($newRequestsTable)
        ->where('id', $new_requests_tables_Id)
        ->first();
    
    if ($row !== null) {
       
        $status = $row->$statusColumn;
        
        // Check if the status is one of the desired values (Laravel 7)
        if ($status == 0) {
            // Insert the row into the terminated requests table
            DB::table($terminatedRequestsTable)
                ->insert((array) $row);
            
            // Delete the row from the new requests table
            DB::table($newRequestsTable)
                ->where('id', $new_requests_tables_Id)
                ->delete();
            
           
        }
     }
     return Redirect::to('index'); 
}
}
