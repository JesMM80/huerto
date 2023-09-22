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
        'family_id',
        'sembrado',
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

    public function family(){
        return $this->belongsTo(Family::class);
    }

    public function siembras(){
        return $this->hasMany(Siembra::class);
    }

    public function zonas(){
        return $this->hasMany(HortalizaZona::class);
    }

    public function cosechas(){
        return $this->hasMany(Cosecha::class);
    }
}
