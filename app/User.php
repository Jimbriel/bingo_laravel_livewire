<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

USE App\SocialProfile;

class User extends Authenticatable
{
    use Notifiable;

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

    //Relacion uno a muchos

    public function adminlte_image()
    {
        $social_profile = $this->socialProfiles->first();

        if($social_profile){
            return $social_profile->social_avatar;
        }else{
            return 'https://picsum.photos/300/300';
        }
    }
    public function socialProfiles()
    {
        return $this->hasMany(SocialProfile::class);
    }

}
