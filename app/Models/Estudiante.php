<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=['nombre','appat','apmat','control','tec','correo','folio'];

    public function tecnologicos(){
        return $this->belongsTo(Tecnologico::class,'tec');
    }

}
