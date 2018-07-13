<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'name', 'location', 'start_date', 'end_date', 'description'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function checkOwner($user_id){
        if ($this->user_id == $user_id)return true;
        return false;
    }
}
