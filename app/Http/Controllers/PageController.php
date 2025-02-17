<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'selamat datang';
}

    public function about() {
        return 'Nim : 2341760185 <br> Nama : Jessica Amelia';
}

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
}
}


