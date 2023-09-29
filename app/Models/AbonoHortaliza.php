<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbonoHortaliza extends Model
{
    use HasFactory;

    protected $fillable = [
        'abono_id',
        'hortaliza_id',
    ];

    protected $table = 'abono_hortaliza';

        
    public function hortaliza(){
        return $this->belongsTo(Hortaliza::class);
    }
    public function abono(){
        return $this->belongsTo(Abono::class);
    }
}
