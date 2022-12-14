<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chatbot extends Model
{
    use HasFactory;

    protected $fillable = [
        'ask',
        'answer',
        'is_active',
    ];

    protected function ask(): Attribute
    { 
        return Attribute::make(
            set: fn($value) => Str::lower($value),
        );
    }

    protected function answer(): Attribute
    { 
        return Attribute::make(
            set: fn($value) => Str::lower($value),
        );
    }
}