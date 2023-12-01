<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'filial';
    protected $primaryKey = 'id';
    protected $fillable = [
        'codigo',
        'nome'
    ];

}
