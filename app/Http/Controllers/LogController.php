<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public static function store($usuario)
    {
        $log = new Log();
        $log->id_usuario = $usuario['id'];
        $log->nome_completo = 'beatriz';
        $log->dt_registro = date('Y-m-d H:i:s');
        $log->status = 'criação';
        $log->login_usuario = 'beatriz.log';
        $log->tipo_campo = 'Cadastro';
        $log->info_antiga = 'Cadastro Principal';
        $log->alterado_para = $usuario['nome'];
        $log->save();
    }

    public static function delete($cadastro)
    {
        $log = new Log();
        $log->id_usuario = $cadastro['id'];
        $log->nome_completo = 'beatriz';
        $log->dt_registro = date('Y-m-d H:i:s');
        $log->status = 'Exclusão';
        $log->login_usuario = 'beatriz.log';
        $log->tipo_campo = 'Todos os dados foram excluídos';
        $log->info_antiga = $cadastro['nome'];
        $log->alterado_para = 'Excluindo usuário';
        $log->save();
    }


    public static function update($request, $cadastro)
    {
        $dados = array_keys($request->except('_token', '_method'));

        foreach ($dados as $item) {

            if ($cadastro[$item] != $request[$item]) {
                $log = new Log();
                $log->id_usuario = $cadastro['id'];
                $log->nome_completo = 'beatriz';
                $log->dt_registro = date('Y-m-d H:i:s');
                $log->status = 'Edição';
                $log->login_usuario = 'beatriz.log';
                $log->tipo_campo = ucfirst($item);
                $log->info_antiga =  $cadastro[$item];
                $log->alterado_para = $request[$item];
                $log->save();
            }
        }
    }
}
