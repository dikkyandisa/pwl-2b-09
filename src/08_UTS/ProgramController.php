<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    Public function kreatif ()
    {
        echo '<center><h1>KREATIVE GO<h1><br>
        <img src="images/kreatif.jpg"><br>
        <a href="program">BACK NEWS</a>';
    }
    Public function pendidikan ()
    {
        echo '<center><h1>TANYA PINTAR<h1><br>
        <img src="images/pendidikan.jpg"><br>
        <a href="program">BACK NEWS</a>';
    }
    
    Public function hiburan ()
    {
        echo '<center><h1>ANEKA GAME<h1><br>
        <img src="images/hiburan.jpg"><br>
        <a href="program">BACK NEWS</a>';
    }
}
