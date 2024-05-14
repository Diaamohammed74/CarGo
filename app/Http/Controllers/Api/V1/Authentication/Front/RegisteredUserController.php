<?php

namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\front\Auth\RegisterRequest;
use App\Models\Customer;

class RegisteredUserController extends Controller
{

    public function create(): View
    {
        return view('front.auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $data            = $request->validated();
        $user            = User::create($data);
        $data['user_id'] = $user->id;
        Customer::create($data);
        Auth::login($user);
        return to_route('auth.login');
    }
}
