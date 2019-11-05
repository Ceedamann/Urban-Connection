<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Urban Connection';
        return view('pages.index')->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('posts', Post::all());
    }

    public function markets() {
        $title = 'Welcome to markets';
        return view('pages.markets')->with();
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
