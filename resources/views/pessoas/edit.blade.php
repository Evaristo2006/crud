
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    body{
        background: rgb(3, 153, 247);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;

    }

    .container{
        margin: 0 15px;
    }
    .form{
        width: 100%;
        max-width: 1000px;
        padding: 20px;
        background: rgb(184, 213, 253);
        border-radius: 10px;


    }
    input{
    width: 100%;
    padding: 12px;
    background: white;
    border-radius: 6px;
    border: none;
    outline: none;
    font-size: 16px;
    margin-bottom: 20px;
}
h2{
    text-align: center;
    margin-bottom: 30px;
}
button{
  width: 100%;
    padding: 12px;
    border-radius: 4px;
    border: none;
    outline: none;
  background: rgb(11, 123, 189);
  cursor: pointer;
  color: white;
  transition: 2s;
  margin-bottom: 20px;
  max-width: 100px;
}
button:hover{
    background: rgb(30, 15, 112);
}
p{
    font-size: 12.5px;
    text-align: center;
    margin-bottom: 10px;

}
p a{
    color: #7294ec;
    text-decoration: none;
}
p a:hover{
    text-decoration: underline;
}

</style>

@section('content')

    <form action="{{route('pessoas.update', $pessoa->id) }}" method="POST">
        @csrf
        @method('PUT')


            <div class="container">
            <div class="form">

            <h2 style="color: black">Atualizar Cadastro💡</h2>
            <a href="{{route('pessoas.index') }}" class="btn btn-secondary mb-3">Voltar</a>
            <br>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" required value="{{ $pessoa->nome }}">



            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required value="{{ $pessoa->email }}">



            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required value="{{ $pessoa->telefone }}">

            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" class="form-control" id="sexo" placeholder="Sexo" required value="{{ $pessoa->sexo }}">

        <button type="submit" class="btn btn-sucess">atualizar</button>
            </div>
            </div>

    </form>

