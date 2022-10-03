<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rg',
        'cpf',
        'data_nasc',
        'peso',
        'altura',
        'posicao',
    ];
}
