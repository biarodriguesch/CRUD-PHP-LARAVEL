<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'tb_log';
    protected $primaryKey = 'id_log';
    protected $fillable = ['id_usuario','nome_completo','dt_registro', 'status', 'login_usuario', 'tipo_campo', 'info_antiga', 'alterado_para'];
    public $timestamps = false;
}


