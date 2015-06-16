<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'password'];

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

    public function companies()
    {
        return $this->hasMany('App\Company');
    }
}
