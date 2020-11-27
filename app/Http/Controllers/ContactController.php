<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('Contact');
    }
    public function __construct()
{
 $this->middleware('auth');
}
}
