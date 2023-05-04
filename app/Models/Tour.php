<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $guarded = ['id'];

    protected $casts = [
        'start' => 'datetime',
        'pickup_time' => 'datetime',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
