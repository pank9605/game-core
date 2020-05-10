<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'first_name', 'last_name', 'birthdate', 'gender', 'email', 'password', 'cover_image', 'porfile_image'
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

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function getPorfileImageUrlAttribute(){
        if ($this->porfile_image != null) {
            if (substr($this->porfile_image, 0, 4) === "http") {
                return $this->porfile_image;
            } else {
                return '/images/porfile_images/' . $this->porfile_image;
            }
        }else{
            return '/images/porfile_images/default.jpg';
        }
    }

    public function getCoverImageUrlAttribute(){
        if ($this->cover_image != null) {
            if (substr($this->cover_image, 0, 4) === "http") {
                return $this->cover_image;
            } else {
                return '/images/cover_images/' . $this->cover_image;
            }
        }else{
            return '/images/cover_images/default.jpg';
        }
    }

    public function getBirthdateDateAttribute(){
        if ($this->birthdate != null){
            return date("Y-m-d",strtotime($this->birthdate));
        }
    }

    public function getAgeAttribute(){
        return Carbon::createFromDate($this->birthdate)->age;
    }
}
