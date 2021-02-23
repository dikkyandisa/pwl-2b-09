<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
       return 'Selamat datang';
    }
    public function about()
    {
       return '<p>Nama: Dikky Andisa Tripamungkas</p><br>
               <p>NIM: 1941720051</p><br>';
    }
    public function articles()
    {
       return 'Article';
    }
}
