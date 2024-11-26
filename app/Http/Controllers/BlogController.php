<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            ['title' => 'First Blog', 'excerpt' => 'This is the first blog excerpt.'],
            ['title' => 'Second Blog', 'excerpt' => 'This is the second blog excerpt.'],
        ];

        return view('home', compact('blogs'));
    }
}

