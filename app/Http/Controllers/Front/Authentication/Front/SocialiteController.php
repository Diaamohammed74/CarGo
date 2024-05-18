<?php

namespace App\Http\Controllers\Front\Authentication\Front;

use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialiteUser = Socialite::driver($provider)->user();
        $firstName = '';
        $lastName = '';
        
        if ($provider === 'google') {
            $firstName = $socialiteUser['given_name'];
            $lastName = $socialiteUser['family_name'];
        } elseif ($provider === 'facebook') {
            // Facebook might provide names in a different structure
            $fullName = $socialiteUser->getName();
            $nameParts = explode(' ', $fullName);
            $firstName = $nameParts[0];
            $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
        }
    
        $user = User::updateOrCreate([
            'provider'    => $provider,
            'provider_id' => $socialiteUser->getId(),
        ], [
            'first_name'        => $firstName,
            'last_name'         => $lastName,
            'type'              => UsersTypes::CUSTOMER->value,
            'status'            => StatusEnum::Active->value,
            'email'             => $socialiteUser->getEmail(),
            'image'             => $socialiteUser->getAvatar(),
        ]);
    
        Customer::updateOrCreate([
            'user_id'     => $user->id,
            'national_id' => null,
        ]);
    
        Auth::login($user, true);
    
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    
}
