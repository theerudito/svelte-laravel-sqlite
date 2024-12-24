<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personajes extends Model
{
    use HasFactory;

    protected $table = 'personajes';
    protected $fillable = ['nombre', 'clan', 'edad'];
    public $timestamps = false;
}
