<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'type',
        'image',
        'ingredients',
        'preparation',
        'preparation_time',
        'description',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
