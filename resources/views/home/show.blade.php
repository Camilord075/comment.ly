@extends('index')

@section('title')
    <title>Editar: {{ $comment->title }}</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Editar comentario: {{ $comment->title }}
                    </div>
                    <div class="card-body" style="text-align: center">
                        <form action="{{ route ('comment-update', ['id' => $comment->id]) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="username" value="{{ auth()->user()->username }}">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Título" value="{{ $comment->title }}">
                                <label for="title">Título</label>
                            </div>
                            <div class="form-group">
                                <label for="content" class="mb-1">¿En qué estás pensando?</label>
                                <textarea type="text" name="content" class="form-control" id="content" rows="5" cols="10">{{ $comment->content }}</textarea>
                            </div>
                            <input type="submit" class="btn btn-dark mt-2" value="Editar">
                            <a href="/home" class=" btn btn-danger mt-2">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection