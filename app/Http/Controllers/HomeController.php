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
    public function vacancies()
    {
        return view('pages.vacancies');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function policy()
    {
        return view('pages.policy');
    }
    public function franchise()
    {
        return view('pages.franchise');
    }
    public function news()
    {
        return view('pages.news');
    }
    public function single_news()
    {
        return view('pages.single_news');
    }
    public function profile()
    {
        return view('pages.profile');
    }
    public function item()
    {
        return view('pages.item');
    }
    public function address()
    {
        return view('pages.address');
    }
    public function basket()
    {
        return view('pages.basket');
    }
    public function filters()
    {
        return view('pages.filters');
    }
    public function test()
    {
        return view('pages.test');
    }
}
