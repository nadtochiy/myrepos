<?php

namespace App\Http\Controllers;

use App;
use App\Http\Request\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->paginate(3);
        return view('main', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('show', compact('blog'));
    }



    public function insert(BlogRequest $request)
    {
        Blog::create($request->validated());
        return redirect()->back();
    }

    public function red(Blog $blog)
    {
        return view('redact', compact('blog'));
    }

    public function change(Blog $blog, Request $request)
    {
        $blog->fill($request->all());
        $blog->save();
        return redirect()->back();
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
