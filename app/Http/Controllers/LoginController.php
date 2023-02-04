<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{      
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index() 
    {
        return view('login');
    }

    public function login(LoginUserRequest $request)
    {
        $email = $request->get('email');
        $pass = bcrypt($request->get('password'));
        $getUser = $this->userService->getUser($email, $pass);

        if ($getUser) {
            if (Auth::attempt($request->except('_token'))) {
                $request->session()->regenerate();
     
                return redirect()->intended('dashboard');
            }
            
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        
    }
}
