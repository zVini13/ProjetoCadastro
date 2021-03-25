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
    }
    h2{
        font-size: 18px;
    }
    form{
        font-size: 25px;
    }
</style>
<body>
    <div class="container">
    <div class="row mt-2">

        <h1>Cadastro</h1>

    </div>
    <form>
        <div class="mb-3">
          <label for="NomeCompleto" class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" id="NomeCompleto">
        </div>
        <div class="mb-3">
          <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
          <input type="date" class="form-control" id="dataNascimento">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha">
          </div>
          <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="number" class="form-control" id="matricula">
          </div>

        <button type="submit" class="btn btn-primary">Próximo</button>
      </form>
      <div class="roll mt-2">
          <h2>Todos os direitos reservados - Vinicius Santos Goes - 2021</h2>
      </div>
    </div>
</body>
</html>