<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        return view('panel.pages.publication.table');
    }

    public function new()
    {
        return view('panel.pages.publication.form');
    }
}
