<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'Calificaciones';
    /*Declarocion de los datos que se pueden editar
    Nombre,Apellido paterno, Apellido materno, Fecha de nacimiento, Curp
    */
    protected $fillabel=['alumno_id','materia_id','profesor_id','parcial1','parcial2','parcial3','promedio'];

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia 
     
     }
