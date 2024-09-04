<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($articlesId = '8989')
    {
        return 'Halaman Artikel ID '.$articlesId;
        
    }
}
