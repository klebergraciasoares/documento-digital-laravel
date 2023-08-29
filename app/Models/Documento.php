<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documento';

    protected $fillable = [
        'nome',
        'tipo_documento_id',
        'setor_id',
        'filial_id',
        'armario',
        'gaveta',
        'pasta',
        'data_documento',
        'data_inclusao',
        'user_id'
    ];
}
