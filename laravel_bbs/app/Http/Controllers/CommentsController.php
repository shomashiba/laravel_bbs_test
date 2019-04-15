<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    private $post;

    public function __construct(Post $instanceClass)  // Todoクラスのインスタンス化
    {
        $this->post = $instanceClass;  // 引数で渡ってきたものを代入している
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|max:2000',
        ]);

        $post = $this->post->findOrFail($params['post_id']);
        $post->comments()->create($params);

        return redirect()->route('posts.show', ['post' => $post]);
    }
}