<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    // protected $casts = [
    //     'fecha' => 'date:Y-m',
    // ];}

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}   
