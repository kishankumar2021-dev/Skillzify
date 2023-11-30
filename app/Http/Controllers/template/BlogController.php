<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('template.blog');
    }

}
