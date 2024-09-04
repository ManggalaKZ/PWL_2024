<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function greeting()
    {
        return view('blog.hello')
        ->with('name','Andi')
        ->with('occupation','Astronaut')
        ;
    }
}
