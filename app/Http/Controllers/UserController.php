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
        $reg = new Comment();
        $reg->nickname = $req->input('nickname');
        $reg->e_mail = $req->input('e_mail');
        $reg->text = $req->input('text');
        $reg->save();
        echo("<script type='text/javascript'> var answer = prompt('yeeee'); </script>");
        return redirect()->route('main')->with('success', 'Thank you for comment!');
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
