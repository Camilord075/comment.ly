<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment.ly: Ingresa Ya!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/sketchy/bootstrap.min.css" integrity="sha512-nG654c/o/xm1kmVCBDz+nQ554Y3z8jQi3JdhXb1qBCcUz5zCRnijb0y2ToIRCLiyvp1qr9a2xcLk2d7Wg96Pyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset ('img/logo.jpg') }}">
</head>
<body>
<div class="container">
        <div class="row" style="text-align: center">
            <h1>Comment.ly</h1>
            <hr>
            <p>¿Qué esperas? Ven y comenta nuevamente, hay muchos comentarios para ti el día de hoy, ven y explora</p>
            <br>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Inicia Sesión
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            @if (session('success'))
                                <h6 class="alert alert-success">{{ session('success') }}</h6>
                            @endif
                            @error('username')
                                <h6 class="alert alert-danger">{{ $message = 'El nombre de usuario ya está en uso' }}</h6>
                            @enderror
                            @error('password')
                                <h6 class="alert alert-danger">{{ $message = 'Use una contraseña de 8 caracteres' }}</h6>
                            @enderror
                            <div class="form-floating">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Ingresa un nombre de usuario o correo">
                                <label for="username">Nombre de Usuario o Correo</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                <label for="password">Contraseña</label>
                            </div>
                            <br>
                            <a href="/register">¿No tienes usuario? Registrate ahora!</a>
                            <br><br>
                            <button type="submit">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>