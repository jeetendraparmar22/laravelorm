<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function addUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            "success" => "User has been added",

        ]);
    }
    public function addPost(Request $request)
    {
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_description = $request->post_description;
        $post->user_id = $request->user_id;
        $post->save();
        return "success";

    }
    public function addComment(Request $request)
    {
        $comment = new Comment();
        $comment->comment_description = $request->comment_description;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return response()->json([
            "success" => "Comment added",
        ]);
    }

    public function getPostWithComment(Request $request)
    {
        $post = Post::find(1);
        $comments = Post::find(1)->comments;
        foreach ($comments as $comment) {
            $commentToShow = $comment->comment_description;
        }
        // exit;
        return response()->json([
            "data" => [
                "id" => $post->id,
                "post_title" => $post->post_title,
                "comments" => [
                    "comment_descrption" => $commentToShow,

                ],
            ],

        ], 200);
    }
}
