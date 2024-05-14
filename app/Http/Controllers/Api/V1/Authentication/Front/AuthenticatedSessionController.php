<?php

namespace App\Http\Controllers\Api\V1\Authentication\Front;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\front\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
      /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('front.auth.login');
    }

      /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (!auth()->attempt($credentials)) {
            // Authentication failed, redirect back with error message
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    
        // Authentication succeeded, regenerate session
        $request->session()->regenerate();
    
        // Redirect to the index page
        return redirect()->route('index');
    }
    


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
