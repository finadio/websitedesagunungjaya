<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'response',
        'responded_at',
    ];
    
    protected $casts = [
        'responded_at' => 'datetime',
    ];
    
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
    
    public function scopeResolved($query)
    {
        return $query->where('status', 'resolved');
    }
}
