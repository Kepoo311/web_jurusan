<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',[
            'title' => "Home",
            'post' => Post::latest()->get(),
            'banners' => Banner::latest()->get(),
            'prestasis' => Prestasi::latest()->get()
        ]);
    }
}
