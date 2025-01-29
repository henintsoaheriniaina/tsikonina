<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "title",
        "description",
        "instructions",
        "image_url",
        "prep_time",
        "cook_time",
        "servings",
        "difficulty",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
