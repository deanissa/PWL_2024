<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller {
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Nama : Deanissa Sherly S, dan Nim : 2341760187';
    }
    public function articels() {
        return 'Halaman Artikel dengan Id {id}';
    }
}