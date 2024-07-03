<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'example',
            'email' => 'example@example.com',
            'password' => Hash::make('example1234'),
            'phone' => '123',
            'alamat' => 'example'

        ]);
    }
}
