<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class managePost extends Controller
{
    public function manageArtikel(){
        return view('dashboard.manageArtikel',[
            'title' => 'Artikel',
            'artikel' => Post::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }

    public function deleteArtikel($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/dashboard/manage/artikel')->with('succ','suc');
    }

    public function manageBanner(){
        return view('dashboard.manageBanner',[
            'title' => 'Banner',
            'banner' => Banner::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }
    
    public function deleteBanner($name, $id){
        $path = public_path('img/banners/');
        
        $Banner = Banner::findOrFail($id);
        $Banner->delete();
        unlink($path.$name);
        
        return redirect('/dashboard/manage/banner')->with('succ','suc');
    }

    public function managePrestasi(){
        return view('dashboard.managePrestasi',[
            'title' => 'Prestasi',
            'prestasi' => Prestasi::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }

    
    public function deletePrestasi($id){
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect('/dashboard/manage/prestasi')->with('succ','suc');
    }
}
