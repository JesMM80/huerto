<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hortaliza extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'descripcion',
        'variedad',
        'familia',
        'epoca_siembra',
        'tiempo_germ',
        'separacion',
        'riego',
        'temperatura_hsol',
        'abonos',
        'tratamiento',
        'asociaciones',
        'imagen',
    ];

    public function families(){
        return $this->belongsTo(Family::class);
    }

    public function siembra(){
        return $this->hasMany(Siembra::class);
    }
}
