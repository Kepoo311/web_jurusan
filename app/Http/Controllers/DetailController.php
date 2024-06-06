<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(Post $post){
        return view('detail.index',[
            'title' => 'Hahay',
            'post' => $post,
            'latestArticle' => Post::latest()->paginate(6),
        ]);
    }
}
