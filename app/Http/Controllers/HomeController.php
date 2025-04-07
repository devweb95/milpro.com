<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home'); // La vue 'home.blade.php' dans resources/views
    }
    
    public function about()
    {
        return view('about'); // La vue 'home.blade.php' dans resources/views
    }
    
    public function services()
    {
        return view('service'); // La vue 'home.blade.php' dans resources/views
    }
    public function actualites()
    {
        return view('blog'); // La vue 'home.blade.php' dans resources/views
    }
    public function contact()
    {
        return view('contact'); // La vue 'home.blade.php' dans resources/views
    }
}
