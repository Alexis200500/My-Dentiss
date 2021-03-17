<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class consultas extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey='idconsulta';
    protected $fillable=['idconsulta','idpaciente','idodo','fecha_consulta','hora_consulta'
                        ,'peso','estatura','costo','idstatus'];
}
