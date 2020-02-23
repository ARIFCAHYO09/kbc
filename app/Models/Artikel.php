<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table = 'artikel';
    protected $fillable = [
        'admin_id', 'judul', 'gambar', 'konten'
    ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }
}
