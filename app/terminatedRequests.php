<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class terminatedRequests extends Model
{
    protected $guarded=[];
    protected $table="terminated_requests";

    public function users()
    {
        return $this->belongsTo('App\DashTable1Retrive', 'user_model_id');
    }
    public function spots(){
        return $this->belongsTo('App\spots', 'ambulance_spot_id');
    }
    public function drivers(){
        return $this->belongsTo('App\drivers', 'driver_id');
    }
    public function destination(){
        return $this->belongsTo('App\destination', 'destination_id');
    }


}
