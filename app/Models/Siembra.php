<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siembra extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha', 
        'cantidad', 
        'hortaliza_id'
    ];

    public function hortaliza(){
        return $this->belongsTo(Hortaliza::class);
    }
}
