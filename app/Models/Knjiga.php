<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;
    protected $fillable = [
        'Naziv', 'Autor', 'Broj strana', 'Izdavac'
    ];
}
