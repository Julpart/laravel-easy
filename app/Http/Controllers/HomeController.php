<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index(): string
    {
        return view('index');
    }

    public function authorization(): string
    {
        return view('authorization');
    }
}
