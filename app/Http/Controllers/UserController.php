<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Services\ResponseService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(UserLoginRequest $request): Response|Application|ResponseFactory
    {
        if (auth()->attempt($request->validated())) {
            $user = auth()->user();
            $user->api_token = Str::uuid();
            $user->save();

            return ResponseService::success(["token" => $user->api_token]);
        }

        return ResponseService::error("Ошибка авторизации");
    }

    public function store(UserStoreRequest $request): Response|Application|ResponseFactory
    {
        $user = User::create($request->validated());

        return ResponseService::success($user, 201);
    }
    public function index(): Response|Application|ResponseFactory
    {
        return ResponseService::success( auth()->user());
    }
}
