<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileEditRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class ProfileController extends Controller
{
    public function index ($id) {
        $user = User::find($id);
        $comments = Comment::all()->where('username', '==', $user->username);
        $commentsArray = array();

        foreach ($comments as $comment) {
            array_unshift ($commentsArray, $comment);
        }

        return view ('home.profile', ['user' => $user, 'profileComments' => $commentsArray]);
    }

    public function edit (ProfileEditRequest $req, $id) {
        $user = User::find($id);

        $user->name = $req->name;
        $user->username = $req->username;
        $user->email = $req->username;

        $user->save();

        return redirect('/profile');
    }
}
