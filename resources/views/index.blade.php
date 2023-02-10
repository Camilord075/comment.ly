<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/sketchy/bootstrap.min.css" integrity="sha512-nG654c/o/xm1kmVCBDz+nQ554Y3z8jQi3JdhXb1qBCcUz5zCRnijb0y2ToIRCLiyvp1qr9a2xcLk2d7Wg96Pyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="{{ asset ('img/logo.jpg') }}">
    @yield('title')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top me-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Comment.ly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Inicio</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Buscar">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav d-flex">
                    @auth    
                        <li class="nav-item dropdown me-sm-5">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name ?? auth()->user()->username }}</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('profile-view', ['id' => auth()->user()->id]) }}">Mi perfil</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
                            </div>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Inicia Sesión</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <br><br>
</body>
</html>