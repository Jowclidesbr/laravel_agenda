<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    //use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone_cel',
    ];
}
