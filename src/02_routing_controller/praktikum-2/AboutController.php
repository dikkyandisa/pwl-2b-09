<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
       return '<p>Nama: Dikky Andisa Tripamungkas</p><br>
               <p>NIM: 1941720051</p><br>';
    }
}
