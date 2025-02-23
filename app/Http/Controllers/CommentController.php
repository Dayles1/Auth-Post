<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{
  
public function addComment(StoreCommentRequest $request,$id){

    $comment=Comment::create([
        'comment'
    ]);

}

public function deleteComment(){

}




    
}
