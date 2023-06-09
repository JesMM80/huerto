<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'nombre',
        'necesidades',
    ]; 

    public function hortalizas(){
        return $this->hasMany(Hortaliza::class);
    }
}
