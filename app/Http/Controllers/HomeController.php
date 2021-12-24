<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {

    }

    public function index()
    {
        return view('pages.index');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function partnership()
    {
        return view('pages.partnership');
    }
}
