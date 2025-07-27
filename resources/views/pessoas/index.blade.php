

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
    *{
        background: whitesmoke
    }
    th{
        padding: 10px;
        margin: 10px;
    }
    td{
        padding: 10px;
        margin-left: 10px;
    }
</style>


  <section class="section-action">
    <div class="container">
    <h2>Lista de Pessoas</h2>
    <a href="{{ route('pessoas.create')}}" class="btn btn-succes mb-3"> Cadastrar Nova</a>
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


