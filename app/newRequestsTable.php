<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\DashTable1Retrive;
use Illuminate\Support\Facades\DB;

class newRequestsTable extends Model
{
    protected $table="new_requests_tables";
    protected $guarded=[];
    public $fillable = ['user_model_id','created_at','updated_at'];
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

    public function users()
    {
        return $this->belongsTo('App\DashTable1Retrive', 'user_model_id');
    }

   


}
