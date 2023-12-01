<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'setor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome'
    ];

}
