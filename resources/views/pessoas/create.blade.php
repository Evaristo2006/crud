
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
    <form action="{{route('pessoas.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="form">
            <h2 style="color: black">Cadastrar Nova Pessoa</h2>
    <a href="{{route('pessoas.index') }}" class="btn btn-secondary mb-3">voltar👻</a>
    <br>
          <label for="name">Nome:</label>
            <input type="text" name="nome" class="form-control" id="name" placeholder="Nome" required value="{{ old('nome') }}">

            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required value="{{ old('email') }}">

             <label for="telefone">Telefone:</label>
            <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Telefone"@required(true) value="{{ old('telefone') }}">

            <label for="sexo">Sexo:</label>
            <input type="text" name="sexo" class="form-control" id="sexo" placeholder="Sexo" value="{{ old('sexo') }}">

            <button type="submit" class="btn btn-sucess">Salvar</button>
            </div>


        </div>
    </form>
</div>
