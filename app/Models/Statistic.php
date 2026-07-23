<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = [
        'category',
        'label',
        'value',
        'icon',
        'order',
        'year',
    ];
    
    protected $casts = [
        'order' => 'integer',
        'year' => 'integer',
    ];
    
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category)->orderBy('order');
    }
    
    public function scopeCurrentYear($query)
    {
        return $query->where('year', date('Y'));
    }
}
