<?php

namespace App\Http\Controllers;

use App;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->paginate(3);
//        foreach ($blogs as $b) {
//            $b['content'] = mb_strimwidth($b['content'], 0, 140, "...");
//        }
        return view('main', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('show', compact('blog'));
    }

    public function insert($stat)
    {
        $title = $stat['title'];
        $content = $stat['content'];
        DB::insert('insert into blogs (title, content) values({$title},{$content})');
    }
}
