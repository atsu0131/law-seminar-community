<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follower extends Model
{
    public function user(){
        return $this->belongsTo(\APP\User::class, 'user_id', 'id');
    }
}
