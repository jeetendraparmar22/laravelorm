<?php

namespace App\Http\Controllers;

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
        $post->save();

    }
}
