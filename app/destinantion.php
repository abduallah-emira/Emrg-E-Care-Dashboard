<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destinantion extends Model
{
    protected $table="destinations";
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

        return $this->hasMany(terminatedRequests::class,'destinantion_id','id');
    }
}
