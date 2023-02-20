<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        echo "selamat datang";
    }

    function about(){
        echo "Name: Ziedny Bisma Mubarok<br>";
        echo "Nim:2141720117";
    }

    function articles($id){
        echo "Halaman article dengan id $id";
    }
}
