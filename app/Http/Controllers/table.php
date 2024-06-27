<?php

namespace App\Http\Controllers;

class table extends Controller
{
    public function index()
    {
        $title = "View New Logo";
        return view('dashboard.table', compact('title'));
    }
}
