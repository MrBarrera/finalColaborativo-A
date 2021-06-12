<?php


namespace App\Models;


class Estudiante
{
    protected $guarded = ['idestudiante'];
    protected $primaryKey = 'idestudiante';
    protected $table = 'estudiante';

    public $timestamps = false;
}
