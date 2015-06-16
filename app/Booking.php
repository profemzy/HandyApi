<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $fillable = ['service','details', 'member_id'];
    protected $hidden = ['id', 'created_at', 'updated_at','member_id'];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
