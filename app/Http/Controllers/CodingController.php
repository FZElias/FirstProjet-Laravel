<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodingController extends Controller
{
    public function index()
    {
        $name = 'Hello';
        return view('welcome' ,compact('name'));
    }
}
