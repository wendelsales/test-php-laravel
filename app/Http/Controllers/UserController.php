<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{      
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index($id) 
    {
        $user = $this->userService->getUserById($id);
        if ($user['status'] === false) {
            return response()->json(['message' => 'Usuário não encontrado!'], 404);
        }

        return response()->json(['message' => 'Sucesso!', 'data' => $user['data']], 200);
    }
}
