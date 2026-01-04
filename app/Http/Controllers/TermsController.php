<?php

namespace App\Http\Controllers;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("terms.index");
    }

    public function terms()
    {
        return view("user.terms");
    }
}