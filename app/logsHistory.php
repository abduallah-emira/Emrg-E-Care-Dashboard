<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logsHistory extends Model
{
    protected $table="logins";
    protected $guarded=[];

    public function admins()
    {
        return $this->belongsTo('App\admins', 'adminId');
    }
    
}
