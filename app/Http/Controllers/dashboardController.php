<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view("dashboard.index",[
            'title' => 'Kepo Gans'
        ]);
    }

    public function artikel(){
        return view("dashboard.postArtikel",[
            'title' => 'Artikel'
        ]);
    }

    public function banner(){
        return view("dashboard.postBanner",[
            'title' => 'Banner'
        ]);
    }

    public function prestasi(){
        return view("dashboard.postPrestasi",[
            'title' => 'Prestasi'
        ]);
    }
}
