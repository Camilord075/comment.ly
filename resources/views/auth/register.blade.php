<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment.ly: Registrate Ahora!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/sketchy/bootstrap.min.css" integrity="sha512-nG654c/o/xm1kmVCBDz+nQ554Y3z8jQi3JdhXb1qBCcUz5zCRnijb0y2ToIRCLiyvp1qr9a2xcLk2d7Wg96Pyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset ('img/logo.jpg') }}">
</head>
<body>
    <div class="container">
        <div class="row" style="text-align: center">
            <h1>Comment.ly</h1>
            <hr>
            <p>Bienvenido a Comment.ly, registrate para que disfrutes de comentar con nosotros</p>
            <br>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Registro
                    </div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            @if (session('error'))
                                <h6 class="alert alert-danger">{{ session('error') }}</h6>
                            @endif
                            @error('email')
                                <h6 class="alert alert-danger">{{ $message = 'El correo ya está en uso' }}</h6>
                            @enderror
                            @error('username')
                                <h6 class="alert alert-danger">{{ $message = 'El nombre de usuario ya está en uso' }}</h6>
                            @enderror
                            @error('password')
                                <h6 class="alert alert-danger">{{ $message = 'Use una contraseña de 8 caracteres' }}</h6>
                            @enderror
                            @error('password_confirmation')
                                <h6 class="alert alert-danger">{{ $message = 'Las contraseñas no coinciden' }}</h6>
                            @enderror
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa tu nombre">
                                <label for="name">Nombre</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Ingresa un nombre de usuario">
                                <label for="username">Nombre de Usuario</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu email">
                                <label for="email">Correo Electrónico</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Edad">
                                <label for="age">Edad</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirmación">
                                <label for="password_confirmation">Confirma tu Contraseña</label>
                            </div>
                            <a href="/login">Si ya tienes un usuario, ¡Inicia sesión ahora!</a>
                            <button type="submit">Registrate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>