<style>
    *{
        background: whitesmoke;
    }
</style>

@section('content')
<div class="container">
    <h2 style="">Editar Pessoa</h2>
    <a href="{{route('pessoas.index') }}" class="btn btn-secondary mb-3">Voltar</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro!</strong>
        Corrija os problemas abaixo: <br> <br>
        <ul>
            @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
             @endforeach

        </ul>
    </div>
    @endif


    <form action="{{route('pessoas.update', $pessoa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $pessoa->nome }}">
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $pessoa->email }}">
        </div>

        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="{{ $pessoa->telefone }}">
        </div>
         <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" class="form-control" id="sexo" placeholder="Sexo" value="{{ $pessoa->sexo }}">
        </div>
        <button type="submit" class="btn btn-sucess">atualizar</button>

    </form>
</div>
