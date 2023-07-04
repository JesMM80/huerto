<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HortalizaZona extends Model
{
    use HasFactory;

    protected $fillable = [
        'hortaliza_id',
        'zona_id',
    ];
    
    public function hortaliza(){
        return $this->belongsTo(Hortaliza::class);
    }
    public function zona(){
        return $this->belongsTo(Zona::class);
    }
}
