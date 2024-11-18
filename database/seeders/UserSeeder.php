<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstName' => 'Mamadou',
                'lastName' => 'Diouma',
                'userName' => 'Diouma',
                'email' => 'bmddevtest93@gmail.com',
                'emailConfirmed' => true,
                'phoneNumber' => '628946019',
                'phoneNumberConfirmed' => true,
                'twoFactorEnabled' => false,
                'lockoutEnabled' => false,
                'accessFailedCount' => 0,
                'password' => Hash::make('password123'),
            ]
        ];

        Users::insert($users);
    }
}
