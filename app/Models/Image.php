<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function image() {
        return $this->hasOne(Pokemon::class, 'image_id', 'id');
    }
}
