<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function markets() {
        $title = 'Welcome to markets';
        return view('pages.markets')->with('title', $title);
    }

    public function business() {
        $title = 'Welcome to business';
        return view('pages.business')->with('title', $title);

    }
    public function events() {
        $title = 'Welcome to events';
        return view('pages.events')->with('title', $title);
    }

    public function about() {
        $title = 'Welcome to about';
        return view('pages.about')->with('title', $title);

    }
}
