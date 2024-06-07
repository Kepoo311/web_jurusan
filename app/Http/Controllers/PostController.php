<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function storedata(request $request){
        $validate = $request->validate([
            'judul' => ['required','max:255'],
            'body'=>['required'],
            'thumbnail' => ['required','image','mimes:jpg,jpeg,png,svg,webp,avif','max:2048'] 
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

    public function storeBanner(request $request){
        $validasi = $request->validate([
            "banner" => ['required','image','mimes:jpg,jpeg,png,svg,webp,avif','max:2048']
        ]);

        $banner = $request->file('banner');
        $banner_name = time().'_'.$banner->getClientOriginalName();
        $path = public_path('img/banners/');
        $banner->move($path, $banner_name);

        Banner::create([
            "name" => $banner_name,
        ]);

        return redirect('/dashboard/post/banner')->with('gg','succ.');
    }

    public function storePrestasi(request $request){
        $validate = $request->validate([
            'foto_murid' => ['required','image','mimes:jpg,jpeg,png,svg,webp,avif','max:2048'],
            'nama' => ['required'],
            'kelas'=>['required'],
            'perolehan'=>['required'],
            'bidang'=>['required'],
            'perlombaan'=>['required'],
            'tingkat'=>['required'],
            'periode'=>['required']
        ]);

        $foto_murid = $request->file('foto_murid');
        $foto_murid_name = time().'_'.$foto_murid->getClientOriginalName();
        $path = public_path('img/foto_murid/');
        $foto_murid->move($path, $foto_murid_name);

        $prestasi = [
            'foto_murid' => $foto_murid_name,
            'nama' => $request->nama,
            'kelas'=>$request->kelas,
            'perolehan'=>$request->perolehan,
            'bidang'=>$request->bidang,
            'perlombaan'=>$request->perlombaan,
            'tingkat'=>$request->tingkat,
            'periode'=>$request->periode
        ];

        Prestasi::create($prestasi);
        return redirect('/dashboard/post/prestasi')->with('gg',"Tambah prestasi berhasil!");
    }
}
