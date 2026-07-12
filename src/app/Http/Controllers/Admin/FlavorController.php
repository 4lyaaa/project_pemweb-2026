<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FlavorController extends Controller
{
    public function index()
    {
        return view('admin.rasa.index');
    }
}