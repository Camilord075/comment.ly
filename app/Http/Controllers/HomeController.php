<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index () {
        $comments = Comment::all();
        $commentsArray = array();

        foreach ($comments as $comment) {
            array_unshift ($commentsArray, $comment);
        }


        return view('home.start', ['comments' => $commentsArray]);
    }
}
