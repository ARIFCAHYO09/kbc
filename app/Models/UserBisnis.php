<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBisnis extends Model
{

    protected $table = 'user_bisnis';
    protected $fillable = [
        'status', 'bisnis_id', 'user_id'
    ];
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
    public function bisnis()
    {
        return $this->belongsToMany(Bisnis::class, 'bisnis_id');
    }
}
