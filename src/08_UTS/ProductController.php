<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function laptop ()
    {
        echo '<center><h1>LAPTOP<h1><br>
        <img src="images/laptop1.jpg"><br>
        <img src="images/laptop2.jpg"><br>
        <img src="images/laptop3.jpg"><br>
        <a href="product">BACK PRODUCT</a>';
    }
    Public function phone ()
    {
        echo '<center><h1>PHONE<h1><br>
        <img src="images/hp1.jpg"><br>
        <img src="images/hp2.jpg"><br>
        <img src="images/hp3.jpg"><br>
        <a href="product">BACK PRODUCT</a>';
    }
    Public function aksesoris ()
    {
        echo '<center><h1>ACCESSORIS<h1><br>
        <img src="images/aksesoris1.jpg"><br>
        <img src="images/aksesoris2.jpg"><br>
        <img src="images/aksesoris3.jpg"><br>
        <a href="product">BACK PRODUCT</a>';
    }

}
