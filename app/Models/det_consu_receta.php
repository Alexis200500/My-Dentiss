<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class det_consu_receta extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey='iddetallecr';
    protected $fillable=['iddetallecr','idconsulta','idmed','dosis','periodo'];
}
