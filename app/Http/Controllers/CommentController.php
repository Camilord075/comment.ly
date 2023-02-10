<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment (CommentRequest $req) {
        $comment = new Comment;

        $comment->title = $req->title;
        $comment->content = $req->content;
        $comment->username = $req->username;

        $comment->save();

        return redirect ('/home')->with('success', 'Tu comentario ha sido publicado');
    }

    public function show ($id) {
        $comment = Comment::find($id);

        return view ('home.show', ['comment' => $comment]);
    }

    public function update (CommentRequest $req, $id) {
        $comment = Comment::find($id);

        $comment->title = $req->title;
        $comment->content = $req->content;
        $comment->username = $req->username;

        $comment->save();

        return redirect('/home')->with('success', 'Comentario Actualizado con éxito');
    }

    public function destroy (Request $req, $id) {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/home')->with('success', 'Su comentario ha  sido borrado correctamente');
    }
}
