<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostAnswer;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function mostViews()
    {
        return response(Post::take(10)->orderBy('likes', 'DESC')->get(), 200);
    }

    public function store()
    {
        Post::create(request()->all());

        return response('ok', 200);
    }

    public function vote()
    {
        $update = Post::findOrFail(request('post_id'));

        request('vote_opt') == 1 ?
            $update->update([
                'likes' => $update['likes'] + 1
            ])
            :
            $update->update([
                'dislikes' => $update['dislikes'] + 1
            ]);

        return response(request('vote_opt'), 200);
    }

    public function reply()
    {
        PostAnswer::create(request()->all());

        return response('ok', 200);
    }
}
