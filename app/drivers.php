<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\newRequestsTable;

class drivers extends Model
{
    
    protected $table="ambulance_drivers";
    protected $guarded=[];
    protected $primaryKey='id';
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function spots(){
        return $this->belongsTo('App\spots', 'ambulance_spot_id');
    }
    
    public function terminated_requests(){
        return $this->hasMany(terminatedRequests::class,'driver_id','id');
    }


}
