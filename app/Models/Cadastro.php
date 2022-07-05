<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model

{
    protected $primaryKey = 'id';
    protected $fillable = ['nome','email','idade','endereco','telefone'];
}

