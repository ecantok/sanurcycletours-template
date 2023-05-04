<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = "images";
    protected $guarded = ['id'];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
