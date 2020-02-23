<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    protected $table = 'api';
    protected $fillable = [
        'admin_id', 'api_secret', 'api_key',
    ];
    public function admin()
    {
        return $this->hasOne('App\Admin', 'foreign_key', 'admin_id');
    }
}
