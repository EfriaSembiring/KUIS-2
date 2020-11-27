<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
   

    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Home1')->with(compact('article'));
    }
    public function __construct()
{
 $this->middleware('auth');
}
}

