<?php

namespace App\Http\Controllers;

class ProsedurController extends Controller
{

    public function index()
    {
        return view("prosedur.index");
    }

    public function prosedur()
    {
        return view("user.prosedur");
    }
}