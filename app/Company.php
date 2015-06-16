<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = ['name','info','services','email','phone','website','estab_year','', 'member_id'];
    protected $hidden = ['id', 'created_at', 'updated_at','member_id'];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
