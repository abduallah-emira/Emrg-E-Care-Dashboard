<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\newRequestsTable;
use App\terminatedRequests;
use Illuminate\Support\Facades\DB;

class DashTable1Retrive extends Model
{
    protected $table="user_models";
    protected $guarded=[];
    public $fillable = [ 'name', 'age', 'gender','phone', 'address', 'email', 'nId','password','password_confirmation','t&c'];
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
    public function requests(){

        return $this->hasMany(newRequestsTable::class,'user_model_id','id');
    }
    public function terminated_requests(){

        return $this->hasMany(terminatedRequests::class,'user_model_id','id');
    }
    public static function countTotalRequests()
{
    $totalRequests = 0;
    $totalRequests += newRequestsTable::count();
    $totalRequests += terminatedRequests::count();

    return $totalRequests;
}

public static function countProcessingRequests()
{
    return newRequestsTable::count();
}

public static function countTerminatedRequests()
{
    return terminatedRequests::count();
}






}
