<?php

namespace App\Http\Controllers\Default;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function gallerie()
    {
        return view('pages.gallerie');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
