<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "class",
        "element",
        "ailment",
        "weakness",
        "info",
        "created_at",
        "updated_at",
    ];
}
