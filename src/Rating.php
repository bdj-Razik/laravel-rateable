<?php

namespace willvincent\Rateable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Rating extends Model
{
    public $fillable = [
        'rating',
        'comment'
        'is_active',
        'user_id',
        'user_type',
    ];

    public function rateable()
    {
        return $this->morphTo('rateable');
    }

    public function user()
    {
        return $this->morphTo('user');
    }
}
