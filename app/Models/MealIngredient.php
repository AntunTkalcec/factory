<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealIngredient extends Model
{
    use HasFactory;

    public function meal() {
        return $this->belongsTo(Meal::class);
    }

    public function ingredient() {
        return $this->belongsTo(Ingredient::class);
    }

    protected $table = "meals_ingredients";
    public $timestamps = false;
}
