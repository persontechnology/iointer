<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function soporte()
    {
        return $this->belongsTo(Soporte::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
