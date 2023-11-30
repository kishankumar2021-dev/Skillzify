<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //echo "comming ";
        //die;
        return view('template.index');
    }
}
