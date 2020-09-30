<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'email_verified_at', 'password', 'phonenumber_4_individual', 'websitAddress', 'facebook_link', 'bussiness_hour', 'logo_img_path', 'whats_phone', 'hint_message', 'user_photo', 'login_counter', 'time_registration', 'company_name', 'is_verified_by_number_sms', 'land_number', 'saved_fks_cars_product_ids', 'contact_person', 'instagram_link', 'user_type_id', 'is_verified_by_email', 'activation_token', 'company_4_dealer', 'phonenumber_4_dealer', 'mobilenumber_4_dealer', 'remember_token'
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

    public function car_products(){
        return $this->hasMany('App\Product');
    }
    public function notifications(){
        return $this->hasMany('App\Notification');
    }
    public function favorite_ads(){
        return $this->hasMany('App\Favorite_ad');
    }
    public function rated_me(){
        return $this->hasMany('App\Users_rating_detail','rated_user_id');
    }
    public function i_rate(){
        return $this->hasMany('App\Users_rating_detail','rating_user_id');
    }
    public function previewdcars(){
        return $this->hasMany('App\Users_rating_detail');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function regions(){
        return $this->belongsToMany('App\Region');
    }
}
