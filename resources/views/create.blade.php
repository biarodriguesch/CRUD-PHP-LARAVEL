    @extends('layout.layout')
    @section('content')

    <h1>Novo Cadastro</h1>
    <form action="{{ route('cadastro.store') }}" method="post">
        @csrf
        @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div class="container mt-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">nome</span>
                <input name="nome" type="text" class="form-control" placeholder="" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">idade</span>
                <input name="idade" type="text" maxlength="3" class="form-control" placeholder="" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">telefone</span>
                <input name="telefone" type="text" class="form-control" placeholder="" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">endereco</span>
                <input name="endereco" type="text" class="form-control" placeholder="" required>
            </div>

            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control" placeholder="E-mail" required>
                <span class="input-group-text" id="basic-addon2">@exemplo.com</span>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
@endsection
