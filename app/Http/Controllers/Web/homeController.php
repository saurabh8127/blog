<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        $title = 'Home blog';
        return view('home', ['title'=>$title ]
       );
    }
}
