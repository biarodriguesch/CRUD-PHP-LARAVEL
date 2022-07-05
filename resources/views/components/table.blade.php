
    <table class="table">
        <thead>
            <tr>
                <th class=""scope="col">id</th>
                <th class=""scope="col">nome</th>
                <th class=""scope="col">email</th>
                <th class=""scope="col">idade</th>
                <th class=""scope="col">endereço</th>
                <th class=""scope="col">telefone</th>
                <th class=""scope="col">opções</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($buscas)}} --}}
            @foreach ($buscas as $busca)
                {{-- {{dd($busca)}} --}}
                <tr>
                    <th class="">{{ $busca['id'] }}</th>
                    <th class="">{{ $busca['nome'] }}</th>
                    <th class="">{{ $busca['email'] }}</th>
                    <th class="">{{ $busca['idade'] }}</th>
                    <th class="">{{ $busca['endereco'] }}</th>
                    <th class="">{{ $busca['telefone'] }}</th>


                    <th>
                        <form action="{{ route('cadastro.destroy', $busca->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <a type="button" class="btn btn-primary"
                                href='{{ route('cadastro.edit', $busca['id']) }}'><i class="bi bi-pencil"></i></a>

                            <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buscarDados({{$busca}})"><i class="bi bi-eye"></i></button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>


    </table>
