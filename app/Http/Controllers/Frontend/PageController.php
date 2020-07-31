<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function signup()
    {
        return view('admin.register');
    }
}
