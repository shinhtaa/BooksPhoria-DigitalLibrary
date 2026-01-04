<?php

namespace App\Http\Controllers;

class CopyrightController extends Controller
{
    public function index()
    {
        return view("copyright.index");
    }

    public function copyright()
    {
        return view("user.copyright");
    }
}
