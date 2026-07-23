<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillageProfile extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'email',
        'phone',
        'logo',
        'vision',
        'mission',
        'history',
    ];
}
