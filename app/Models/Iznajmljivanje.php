<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iznajmljivanje extends Model
{
    use HasFactory;
    protected $fillable = [
        'Ime', 'Prezime', 'Knjiga'
    ];
}

