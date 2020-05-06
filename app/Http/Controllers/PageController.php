<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',
            ['except' =>
                ['about']
            ]);
    }

    public function about()
    {
        $aboutContent = "Hi, i'm Lino... I am a software engineer and web developer. I enjoy coding and playing around with new technologies.";
        return view('page/about', ['aboutContent' => $aboutContent]);
    }
}
