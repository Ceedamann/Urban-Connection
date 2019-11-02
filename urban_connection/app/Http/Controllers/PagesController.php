<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function markets() {
        $title = 'Welcome to markets';
        return view('pages.markets')->with('title', $title);
    }
    public function businesses() {
        $title = 'Welcome to businesses';
        return view('pages.businesses')->with('title', $title);
    }
    public function events() {
        $title = 'Welcome to events';
        return view('pages.events')->with('title', $title);
    }
    public function aboutus() {
        $title = 'Welcome to aboutus';
        return view('pages.aboutus')->with('title', $title);
    }
}
