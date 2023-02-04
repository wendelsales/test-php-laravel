<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index() 
    {
        dd(auth()->user());
        return 'Estou logadoooo';
    }
}
