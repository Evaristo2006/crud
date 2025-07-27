<style>
    *{

    }
    div{
        padding: 10px;
        margin: 0px;
    }
</style>

@section('content')
<div class="container">
    <h2 style="color: black">Cadastrar Nova Pessoa</h2>
    <a href="{{route('pessoas.index') }}" class="btn btn-secondary mb-3">Voltar</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro!</strong>
        Corrija os problemas abaixo: <br> <br>
        <ul style="color: brown">
            @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
             @endforeach

        </ul>
    </div>
    @endif


    <form action="{{route('pessoas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Nome:</label>
            <input type="text" name="nome" class="form-control" id="name" placeholder="Nome" value="{{ old('nome') }}">
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Telefone" value="{{ old('telefone') }}">
        </div>
         <div class="mb-3">
            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" class="form-control" id="sexo" placeholder="Sexo" value="{{ old('sexo') }}">
        </div>
        <button type="submit" class="btn btn-sucess">Salvar</button>

    </form>
</div>
