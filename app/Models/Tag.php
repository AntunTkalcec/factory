<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class Tag extends Model
{
    use HasFactory;

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }

    /*public function tags_translations() {
        return $this->hasMany(TagsTranslations::class);
    } */
}
