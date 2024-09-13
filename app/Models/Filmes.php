<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    use HasFactory;

    protected $table = 'filmes';

    protected $fillable = [
        'nome',
        'sinopse',
        'ano',
        'categoria',
        'link',
    ];
}
