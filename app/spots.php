<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\newRequestsTable;


class spots extends Model
{
    protected $table="ambulance_spots";
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
    public function terminated_requests(){

        return $this->hasMany(terminatedRequests::class,'ambulance_spot_id','id');
    }

    public function drivers(){

        return $this->hasMany(drivers::class,'ambulance_spot_id','id');
    }
}
