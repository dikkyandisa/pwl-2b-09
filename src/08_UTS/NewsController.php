<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    Public function politik ()
    {
        echo '<center><h1>Jejak Politik Anak-Anak Amien Rais<h1><br>
        <img src="images/politik.jpg"><br>
        <a href="portfolio">BACK NEWS</a>';
    }
    Public function bencana ()
    {
        echo '<center><h1>Bantu Korban Bencana, Perusahaan Ini Sumbang Tiga Ton Sembako<h1><br>
        <img src="images/bencana.jpg"><br>
        <a href="portfolio">BACK NEWS</a>';
    }
    
    Public function kriminal ()
    {
        echo '<center><h1>Pencetak Uang Palsu di Labuhanbatu Ditembak Polisi<h1><br>
        <img src="images/kriminal.jpeg"><br>
        <a href="portfolio">BACK NEWS</a>';
    }
}
