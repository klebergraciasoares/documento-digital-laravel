<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormGrupo extends Model
{
    use HasFactory;

    protected $table = 'form_grupo';
    protected $fillable = [
        'form_id',
        'grupo_id',
        'inclui',
        'altera',
        'exclui'
    ];

}
