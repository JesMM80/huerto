<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siembra extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha', 
        'cantidad', 
        'hortaliza_id'
    ];

    public function hortaliza(){
        return $this->hasMany(Hortaliza::class);
    }
}
