<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $fillable = ['id','name_pro','monto','fechai','fechaf','recursos','plan','semaforo','avance','desviaciones'];
}
