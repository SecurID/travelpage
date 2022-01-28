<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', ['countries' => 'Panama']);
    }

    public function impressum()
    {
        return view('impressum');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function contact()
    {
        return view('contact');
    }
}
