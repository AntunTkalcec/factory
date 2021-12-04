<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function meal() {
        return $this->hasMany(Meal::class);
    }
    public $timestamps = false;
}