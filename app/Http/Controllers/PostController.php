<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function storedata(request $request){
        $validate = $request->validate([
            'judul' => ['required','max:255'],
            'body'=>['required'],
            'thumbnail' => ['required','image','mimes:jpg,jpeg,png,svg,webp,avif','max:2048','dimensions:max_width=1920,max_height=800'] 
        ]);

        $validate['excerpt'] = Str::limit(strip_tags($request->body),20,'...');

        $thumbnail = $request->file('thumbnail');
        $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
        $path = public_path('img/thumbnail/');
        $thumbnail->move($path, $thumbnail_name);

        $post = [
            'judul' => $request->judul,
            'body'=> $request->body,
            'excerpt' => $validate['excerpt'],
            'thumbnail' => $thumbnail_name,
        ];

        Post::create($post);
        return redirect('/dashboard/post/artikel')->with('gg',"Tambah post berhasil!");
    }
}
