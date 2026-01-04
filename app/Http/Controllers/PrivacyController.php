<?php

namespace App\Http\Controllers;

class PrivacyController extends Controller
{
    public function index()
    {
        return view("privacy.index");
    }

    public function privacy()
    {
        return view("user.privacy");
    }
}
