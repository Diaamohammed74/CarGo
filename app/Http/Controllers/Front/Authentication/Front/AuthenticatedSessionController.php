<?php

namespace App\Http\Controllers\Front\Authentication\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    public function create(): View
    {
        return view('front.auth.login');
    }


    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        if(auth()->user()->status['value']!=1){
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            toast('Your Account has been blocked.');
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        toast('Welcome back again ' . auth()->user()->first_name, 'success');
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toast('We hope to see you back on the road soon.keep your ride smooth!','warning');
        return redirect()->intended(RouteServiceProvider::HOME);
    }

}
