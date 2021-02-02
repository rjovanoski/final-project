<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'recipe_id',
        'like',
        'dislike'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
