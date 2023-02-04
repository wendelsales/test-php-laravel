<?php

namespace App\Services;
use App\Models\User;

class UserService
{   
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getUser($email = null, $pass = null)
    {
        $user = $this->userModel
                     ->where('email','=', $email)
                     ->where('password','=',$pass)
                     ->get();
        
        return $user;
    }

    public function getUserById($id = null) {
        if ($id === null) {
            return ['status' => false, 'data' => []];
        }

        $user = $this->userModel->where('id', "=" , $id)->first();

        if (!$user) {
            return ['status' => false, 'data' => []];
        }

        $dataReturn = [
            'email' => $user->email,
            'password' => $user->password_text
        ];

        return ['status' => true, 'data' => $dataReturn];
    }
}
