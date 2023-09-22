<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = [
        'lugar',
    ];

    public function hortalizas(){
        return $this->hasMany(Hortaliza::class);
    }

    public function cosechas(){
        return $this->hasMany(Cosecha::class);
    }
}
