<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Enums\StatusEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'Admin',
            'email'             => 'admin@admin.com',
            'phone'             => '1234567890',
            'image'             => null,
            'type'              => 1,
            'status'            => StatusEnum::Active,
            'gender'            => 'Male',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
        ]);
        Admin::create([
            'user_id' => $user->id,
        ]);
    }
}
