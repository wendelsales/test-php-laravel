<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function index() 
    {   
        return view('dashboard');
    }
}
