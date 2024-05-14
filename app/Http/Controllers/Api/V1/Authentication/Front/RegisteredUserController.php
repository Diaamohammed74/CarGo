<?php

namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\front\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{

    public function create(): View
    {
        return view('front.auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $data=$request->validated();
        dd($data);
        $data['password']=Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);
        return to_route('/front.index');
    }
}
