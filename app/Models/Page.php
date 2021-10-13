<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'email', 'email2', 
        'phone', 'phone2', 'address', 'schedules',
        'facebook','instagram','twitter', 'youtube', 
        'linkedin'
    ];
}
