<?php

namespace App;

use App\Models\Plan;
use App\Models\UserPlan;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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

    public function planes()
    {
        return $this->belongsToMany(Plan::class,'user_plans','user_id','plan_id')
        ->as('user_plans')
        ->withPivot('id','dia');
    }
    public function hasPlan($idPlan,$idUser)
    {
        $user_plans=UserPlan::where(['plan_id'=>$idPlan,'user_id'=>$idUser])->first();
        if($user_plans){
            return true;
        }
        return false;
    }
}
