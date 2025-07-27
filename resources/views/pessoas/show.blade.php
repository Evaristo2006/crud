@section('content')
<div class="container">
    <h2>Detalhes da Pessoa</h2>
    <a href="{{ route('pessoas.index') }}" class="btn btn-secondary mb-3"> Voltar </a>
    <div class="card">
        <div class="card-boy">
        <h5><Strong>Nome:</Strong> {{$pessoa->nome}}</h5>
        <h5><Strong>Email:</Strong> {{$pessoa->email}}</h5>
        <h5><Strong>Telefone:</Strong> {{$pessoa->telefone}}</h5>
        <h5><Strong>Sexo</Strong> {{$pessoa->sexo}}</h5>


        </div>

    </div>
</div>
