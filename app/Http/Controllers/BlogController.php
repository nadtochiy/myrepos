<?php

namespace App\Http\Controllers;

use App;
use App\Http\Request\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->latest()->paginate(3);
        return view('main', ['blogs' => $blogs]);
    }

    public function show(Blog $blog)
    {
        return view('show', ['blog' => $blog]);
    }


    public function insert(BlogRequest $request)
    {
        $stat = Blog::create($request->validated());
        $stat->fill(['user_id' => Auth::id()]);
        $stat->save();
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
