<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family: 'Oswald', sans-serif;
        background-color: aliceblue;
    }
    h2{
        font-size: 18px;
    }
    h3{
        font-size: 20px;
    }
    form{
        font-size: 25px;
    }
</style>
<body>
    <div class="container">
    <div class="row mt-3">
       <div class="row mb-2">
        <div class="d-flex justify-content-center"><h1>Cadastro</h1></div>
       </div>
    </div>
    <form method="POST" action="{{ route('cadastropronto')}}">
        @csrf
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo:</label>
              <input type="text" class="form-control" id="nome" name= "nome">
        </div>
        <div class="mb-3">
          <label for="data" class="form-label">Data de Nascimento:</label>
          <input type="date" class="form-control" id="data" name= "data">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name= "senha">
          </div>
          <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="number" class="form-control" id="matricula" name= "matricula">
          </div>
          <button type="submit" class="btn btn-primary"><h3>Finalizar</h3></button>
          <a href="{{route('menu')}}" class="btn btn-primary" > <h3>Voltar para o menu</h3></a></div>
      </form>
      <div class="roll mt-4">
          <h4 class="text-center">Todos os direitos reservados - Vinicius Santos Goes - 2021</h4>
      </div>
    </div>
</body>
</html>