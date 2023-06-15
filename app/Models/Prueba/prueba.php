<?php

namespace App\Models\Prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
    ];

    protected $hidden = [
        'edad',
    ];


}
