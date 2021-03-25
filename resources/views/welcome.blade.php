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
</style>
<body>
    <div class="container">

        <div class="row mt-3">
            <div class="row mb-2">
                <div class="d-flex justify-content-center"><h1>Menu</h1></div>
            </div>
         </div>
         <div class="row mt-3">
            <a href="{{route('formCadastro')}}" class="btn btn-primary btn-lg" >Cadastrar usuário</a>
        <div class="row mt-3">
            <a href="{{route('list')}}" class="btn btn-primary btn-lg" >Listar usuários</a>
        </div>
        <div class="roll mt-4">
            <h4 class="text-center">Todos os direitos reservados - Vinicius Santos Goes - 2021</h4>
        </div>

    </div>
</body>
</html>