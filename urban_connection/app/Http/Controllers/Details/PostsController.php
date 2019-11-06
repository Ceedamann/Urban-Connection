<?php

namespace App\Http\Controllers\Details;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Category;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('details.show')->with('post', $post);
    }
    public function category(Category $category)
    {
        return view('details.category')->with('category', $category)->with('posts', $category->posts)->with('categories', Category::all())->with("tags", Tag::all());
    }
    public function tag(Tag $tag)
    {
        return view('details.tag')->with('tag', $tag)->with('posts', $tag->posts)->with('tags', Tag::all())->with('categories', Category::all());
    }
    
}
