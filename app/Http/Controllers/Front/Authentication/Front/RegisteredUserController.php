<?php

namespace App\Http\Controllers\Front\Authentication\Front;
use App\Models\User;
use App\Models\Customer;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\front\Auth\RegisterRequest;

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
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
