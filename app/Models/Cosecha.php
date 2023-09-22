<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosecha extends Model
{
    use HasFactory;

    protected $fillable = [
        'hortaliza_id',
        'kilos',        
        'zona_id',
        'user_id',
    ];

    public function hortaliza(){
        return $this->belongsTo(Hortaliza::class);
    }

    public function zona(){
        return $this->belongsTo(Zona::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
