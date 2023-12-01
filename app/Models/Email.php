<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'email';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email'
    ];

}
