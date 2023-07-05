<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 

class admins extends Authenticatable implements JWTSubject
{


  public function getJWTIdentifier()
  {
    return $this->getKey();
  }

  public function getJWTCustomClaims()
  {
     return [];
  }
  
  use Notifiable;
    protected $table = 'admins';
    public $fillable = ['name','email','password','phone','age','nId'];
    protected $primaryKey='id';

    protected $hidden = [
     'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function logsHistory(){

      return $this->hasMany(logsHistory::class,'adminId','id');
  }

    


}
