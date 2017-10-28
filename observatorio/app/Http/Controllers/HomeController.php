<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use observatorio\Publicacao;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function welcome(Request $request)
    {
        return view('welcome.welcome', ['news' => Publicacao::where('publicada', '=', true)->orderBy('created_at', 'desc')->take(3)->get()]);
    }

    public function about(Request $request)
    {
        return view('aboutus');
    }

    public function joinus(Request $request)
    {
        return view('joinus');
    }

    public function terms(Request $request)
    {
        return view('terms');
    }
}
