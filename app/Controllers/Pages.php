<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $helpers = ['url'];

    public function home(): string
    {
        return view('pages/home', [
            'title'      => 'Home',
            'activePage' => 'home',
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title'      => 'About',
            'activePage' => 'about',
        ]);
    }
}