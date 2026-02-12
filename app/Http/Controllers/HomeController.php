<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can pass data to the view if needed
        $data = [
            'page_title' => 'Innovation Redefined',
            'meta_description' => 'Empowering businesses with cutting-edge technology solutions that transform ideas into reality.',
        ];

        return view('home', $data);
    }
}