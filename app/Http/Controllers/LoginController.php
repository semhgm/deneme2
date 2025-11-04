<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function __construct(public UserRepository $userRepository)
    {

    }

    public function login(){

    }
    public function register(userRegisterRequest $request){


        $user = $this->userRepository->create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Kullanıcı başarıyla oluşturuldu.',
            'user_id' => $user->id
        ], 201);
    }
}
