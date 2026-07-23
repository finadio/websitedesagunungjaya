<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'requirements',
        'procedure',
        'processing_time',
        'fee',
        'form_file',
        'is_active',
    ];
    
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
