<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Tymon\JWTAuth\Contracts\JWTSubject; 


use App\Models\Project; 
use App\Models\Role; 
use App\Models\ProjectRole; 

use App\Models\UserProfile; 
use App\Models\UserContact; 

use App\Models\StakeholderRegister; 
use App\Models\Corporation; 



class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot() {
        parent::boot(); 

        static::creating(function($user){
            $user->password = bcrypt($user->password); 
        });
    }

    
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey(); //id; 
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function roles() {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id')
                    ->withTimestamps(); 
    }

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_user', 'user_id', 'project_id')
                    ->using('App\Models\Stakeholder')
                    ->withTimestamps(); 
    }

    public function projectRoles() {
        return $this->belongsToMany(ProjectRole::class, 'project_role_user', 'user_id', 'project_role_id')->withTimestamps(); 
    }

    public function profile() {
        return $this->hasOne(UserProfile::class, 'user_id', 'id'); 
    }

    public function contacts() {
        return $this->hasMany(UserContact::class, 'user_id', 'id'); 
    }

    public function corporations() {
        return $this->belongsToMany(Corporation::class, 'corporation_user', 'user_id', 'corporation_id')
                ->withTimestamps(); 
    }
}
