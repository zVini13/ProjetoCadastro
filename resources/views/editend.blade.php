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
        /* background-color: aliceblue; */
        background-image: url('https://static-cse.canva.com/blob/184311/Fundo-de-Arco-%C3%8Dris-para-Zoom-1.png');
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
        <div class="d-flex justify-content-center"><h1>Editar Endereço</h1></div>
       </div>
    </div>
    <form method="POST" action="{{ route('salvareditend')}}">
        @csrf
        <input type="hidden" name=id value="{{$endereco->id}}">
        <div class="mb-3">
          <label for="cep" class="form-label">CEP:</label>
              <input type="string" class="form-control" id="cep" name= "cep" value="{{$endereco->cep}}">
        </div>
        <div class="mb-3">
          <label for="logradouro" class="form-label">Logradouro:</label>
          <input type="string" class="form-control" id="logradouro" name= "logradouro" value="{{$endereco->logradouro}}">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número:</label>
            <input type="string" class="form-control" id="numero" name= "numero" value="{{$endereco->numero}}">
          </div>
          <div class="mb-3">
            <label for="complemento" class="form-label">Complemento:</label>
            <input type="string" class="form-control" id="complemento" name= "complemento" value="{{$endereco->complemento}}">
          </div>
          <div class="mb-3">
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="string" class="form-control" id="bairro" name= "bairro" value="{{$endereco->bairro}}">
          </div>
          <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="string" class="form-control" id="cidade" name= "cidade" value="{{$endereco->cidade}}">
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <input type="string" class="form-control" id="estado" name= "estado" value="{{$endereco->estado}}">
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