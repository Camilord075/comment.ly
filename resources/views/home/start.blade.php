@extends('index')

@section('title')
    <title>Inicio</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <h6 class="alert alert-success mt-2">{{ session('success') }}</h6>
                @endif
                <div class="card mt-4">
                    <div class="card-header">
                        Comenta
                    </div>
                    @auth
                        <div class="card-body" style="text-align: center">
                            <form action="/home" method="post">
                                @csrf
                                <input type="hidden" name="username" id="username" value="{{ auth()->user()->username }}">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Título">
                                    <label for="title">Título</label>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="mb-1">¿En qué estás pensando?</label>
                                    <textarea type="text" name="content" class="form-control" id="content" rows="5" cols="10"></textarea>
                                </div>
                                <input type="submit" class="btn btn-dark mt-2" value="Comentar!">
                            </form>
                        </div>
                    @endauth
                    @guest
                        <div class="card-body" style="text-align: center">
                            <h1>Para comentar, editar y eliminar tus comentarios, <a href="/login">Inicia Sesión</a></h1>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($comments as $comment)
                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="row py-1">
                                <div class="col-md-9 d-flex align-items-center ml-2">
                                    <h6>{{ $comment->username }}</h6>
                                </div>
                                <div class="col-md-3 d-flex justify-content-end">
                                    <ul class="navbar-nav d-flex">
                                        @auth
                                            <li class="nav-item dropdown me-sm-5">
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical-outline"></ion-icon></a>
                                                <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Reportar comentario</a>
                                                @if ($comment->username == auth()->user()->username)
                                                        <a href="{{ route ('comment-edit', ['id' => $comment->id]) }}" class="dropdown-item">Editar comentario</a>
                                                        <form action="{{ route ('comment-destroy', ['id' => $comment->id]) }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" class="dropdown-item text-danger" value="Eliminar comentario">
                                                        </form>
                                                @endif
                                                </div>
                                            </li>
                                        @endauth
                                        @guest
                                            <li class="nav-item dropdown me-sm-5">
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical-outline"></ion-icon></a>
                                                <div class="dropdown-menu">
                                                    <a href="home/logoreg" class="dropdown-item">Reportar comentario</a>
                                                    <a href="home/logoreg" class="dropdown-item">Editar comentario</a>
                                                    <a href="home/logoreg" class="dropdown-item text-danger">Eliminar comentario</a>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>{{ $comment->title }}</h6>
                            <hr>
                            <p>{{ $comment->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection