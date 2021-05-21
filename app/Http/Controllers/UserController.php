<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\QuestionRequest;
use App\Models\Comment;
use App\Models\Question;

class UserController extends Controller
{
    public function addComment(CommentRequest $req) {
        $comment = new Comment();
        $comment->nickname = $req->input('nickname');
        $comment->year = $req->input('year');
        $comment->text = $req->input('text');
        $comment->save();
        return redirect()->route('main')->with('success', ['m' => 'Thank you for comment!']);
    }

    public function submit(QuestionRequest $req) {
        $reg = new Question();
        $reg->nickname = $req->input('nickname');
        $reg->e_mail = $req->input('e_mail');
        $reg->text = $req->input('text');
        $reg->save();
        return redirect()->route('main')->with('success', ['m' => 'Thank you for question!']);
    }
}
