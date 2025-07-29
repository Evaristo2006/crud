

@section('content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Pessoas</title>
</head>
<body>
<style>
   h2{
    text-align: center;
    margin-top: 20px;
   }
    table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: white;
  color: black;
  border-radius: 5px;
  overflow: hidden;
}



th, td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

th {
  background-color: rgb(3, 153, 247);
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

button {
  margin-right: 5px;
  padding: 5px 10px;
  border: none;
  background-color: rgb(3, 153, 247);
  color: white;
  border-radius: 3px;
  cursor: pointer;
}
a button.btn{
    background: rgb(0, 77, 144);
}

button:hover {
  background-color: #415a77;
}




</style>


  <section class="section-action">
    <div class="container">
    <h2>Lista de Pessoas</h2>
    <a href="{{ route('pessoas.create')}}" class="btn btn-succes mb-3"><button class="btn"> Cadastrar Nova👥</button></a>
    @if ($message = Session::get('Success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
              <th>Sexo</th>
            <th>Acções</th>
        </tr>
        @foreach ($pessoas as $pessoa)
        <tr>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->email }}</td>
            <td>{{ $pessoa->telefone }}</td>
             <td>{{ $pessoa->sexo }}</td>
            <td><a class="btn btn-info btn-sm"  href="{{ route('pessoas.show', $pessoa->id) }}">Ver</a>

            <a class="btn btn-primary" href="{{route('pessoas.edit', $pessoa->id) }}">Editar</a>
       <!-- <form action="{ {route('pessoas.destroy', $pessoa->id) }}" method="POST style=display:inline;">
            @ c srf
            @ meth od ('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza')">Excluir</button>
        </form> -->

     <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
    </form>

       </td>
        </tr>

        @endforeach
    </table>
</div>
  </section>


</body>
</html>


