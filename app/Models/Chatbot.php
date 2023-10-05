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

    protected $cast = [
        'ask' => 'string',
        'answer' => 'string',
    ];

    protected function ask(): Attribute
    { 
        return new Attribute(
            get: fn($value) => 
                Str::of($value)->replaceMatches('[^a-zA-Z0-9]','')->ascii()->lower()->squish(),
            set: fn($value) => 
                Str::of($value)->replaceMatches('[^a-zA-Z0-9]','')->ascii()->lower()->squish(),
        );
    }
} 