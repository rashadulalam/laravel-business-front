<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }
}
