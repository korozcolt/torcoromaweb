<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message',
        'status',
        'reply',
        'id_pqr'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->id_pqr) {
                $model->id_pqr = $model->generateUniqueRandomIdPqr();
            }
        });
    }

    public function getIdPqrAttribute($value): string
    {
        return str_pad($value, 6, '0', STR_PAD_LEFT);
    }

    public function setIdPqrAttribute($value)
    {
        $this->attributes['id_pqr'] = str_pad($value, 6, '0', STR_PAD_LEFT);
    }

    /**
     * @throws Exception
     */
    public function generateUniqueRandomIdPqr(): int
    {
        do {
            $randomIdPqr = random_int(100000, 999999); // Cambiar el rango a 999999
        } while (self::where('id_pqr', $randomIdPqr)->exists());

        return $randomIdPqr;
    }
}
