<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment = Comment::all();
        return $comment;
    }
    public function store(Request $request){
        $request->validate([
            'comment' => 'required',
            'likes' => 'required'
        ]);

        return Comment::create($request->all());
    }
    public function show(Comment $comment){
        return Comment::find($comment);
    }

    public function update(Request $request, $id){
        $comment = Comment::find($id);
        $comment->update($request->all());
        return $comment;
    }

    public function destroy(Comment $comment){
        return Comment::destroy($comment);
    }
}
