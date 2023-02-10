<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión O Registrate Ahora!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/sketchy/bootstrap.min.css" integrity="sha512-nG654c/o/xm1kmVCBDz+nQ554Y3z8jQi3JdhXb1qBCcUz5zCRnijb0y2ToIRCLiyvp1qr9a2xcLk2d7Wg96Pyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="text-align: center">
            <h1>Comment.ly</h1>
            <hr>
            <div class="col-sm-6 mt-5">
                <img src="{{ asset ('img/comment-wait.png') }}" width="300px">
            </div>
            <div class="col-sm-6 mt-5">
                Para poder acceder a los comentarios, editarlos y eliminarlos, <a href="/login">inicia sesión</a> o <a href="/register">registrate</a> para que puedas acceder a la experiencia de Comment.ly
                <br><br>
                O
                <br><br>
                <a href="/home">Regresar al Inicio</a>
            </div>
        </div>
    </div>
</body>
</html>