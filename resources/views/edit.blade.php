@extends('layout.layout')
@section('content')
    <div class="mt-5">
        <div class="">
            <h1 class="">Editar</h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('cadastro.update', $cadastro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container mt-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">nome</span>
                <input name="nome" type="text" class="form-control" placeholder="nome"
                    value="{{ $cadastro['nome'] }}" required>
            </div>

            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control" placeholder="E-mail"
                    value="{{ $cadastro['email'] }}" required>
                <span class="input-group-text" id="basic-addon2">@exemplo.com</span>

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">idade</span>
                <input name="idade" type="text" class="form-control" placeholder="idade"
                    value="{{ $cadastro['idade'] }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">telefone</span>
                <input name="telefone" type="text" class="form-control" placeholder="telefone"
                    value="{{ $cadastro['telefone'] }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">endereco</span>
                <input name="endereco" type="text" class="form-control" placeholder="endereco"
                    value="{{ $cadastro['endereco'] }}" required>
            </div>
            @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-success">Editar</button>
        </div>
    </form>
@endsection
