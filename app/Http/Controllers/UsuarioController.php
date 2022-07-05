<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $buscas = Cadastro::all();
        // dd($buscas);
        return view('index')->with('buscas', $buscas);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'nome' => 'required',
        //     'email' => 'required|email',
        //     'idade' => 'required|max:3'
        // ]);


        $usuario = new Cadastro();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->idade = $request->idade;
        $usuario->endereco = $request->endereco;
        $usuario->telefone = $request->telefone;

        $usuario->save();

        // dd($request);
        LogController::store($usuario);

        return redirect()->route('cadastro.index')
            ->with('success', 'Usuario has been created successfully.');
    }

    public function edit(Cadastro $cadastro)
    {
        return view('edit', compact('cadastro'));
    }

    public function update(Request $request, Cadastro $cadastro)
    {

        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',

        ]);

        LogController::update($request, $cadastro);

        $cadastro->nome = $request['nome'];
        $cadastro->email = $request['email'];
        $cadastro->idade = $request['idade'];
        $cadastro->endereco = $request['endereco'];
        $cadastro->telefone = $request['telefone'];
        $cadastro->save();


        return redirect()->route('cadastro.index')
            ->with('success', 'Cadastro atualizado com sucesso!');
    }

    public function show()
    {
        return redirect()->route('cadastro.index');
    }

    public function destroy(Cadastro $cadastro)
    {

        $cadastro->delete();

        LogController::delete($cadastro);

        return redirect()->route('cadastro.index')
            ->with('success', 'Cadastro deletado!');
    }
}
