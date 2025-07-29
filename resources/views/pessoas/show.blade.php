<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

body{
 background-color:white;
    display: flex;
    justify-content: center;
   align-items: center;

   min-height: 100vh;
   background: rgb(3, 153, 247);

}
.container{
    margin: 0 15px;
}
.form{
    width: 100%;
    max-width: 450px;
    padding: 30px;
    background: white;
    border-radius: 10px;

    box-shadow: 0 0 10px rgb(0, 0, 0, 0.1);
}
h2{
    text-align: center;
    margin-bottom: 30px;
}
h5{
    font-size: 12.5px;
    text-align: center;
    padding: 10px;
    margin-bottom: 50px;

}
h5{
    color: #7294ec;
    text-decoration: none;
}
h5:hover{
    text-decoration: underline;
}
</style>

@section('content')
<div class="container">

    <div class="container">

        <div class="form">
            <h2>Detalhes da Pessoa</h2>
        <h5><Strong>Nome:</Strong> {{$pessoa->nome}}</h5>
        <h5><Strong>Email:</Strong> {{$pessoa->email}}</h5>
        <h5><Strong>Telefone:</Strong> {{$pessoa->telefone}}</h5>
        <h5><Strong>Sexo</Strong> {{$pessoa->sexo}}</h5>

    <a href="{{ route('pessoas.index') }}" class="btn btn-secondary mb-3"> Voltar </a>


        </div>

    </div>
</div>
