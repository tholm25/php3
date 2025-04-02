<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tin extends Model {
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        'tieuDe',
        'tomTat',
        'urlHinh',
        'created_at',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang',
    ];

    protected $attributes = [
        'created_at' => null,
    ];
    
    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($model) {
            $model->created_at = $model->created_at ?: now();
        });
    }
}