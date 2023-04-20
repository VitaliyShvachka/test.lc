<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Rubric;
use Doctrine\DBAL\Platforms\Keywords\PostgreSQLKeywords;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function index()
    {
        $title = 'Home page';
        $posts = Post::orderBy('id', 'desc')->get();

        return view('home', compact('title', 'posts' ));
    }

    public function show()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }
    public function create()
    {
        $title = 'Create';
        return view('create', compact('title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }

}
