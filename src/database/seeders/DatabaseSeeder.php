<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Mehmet Tuna',
            'email' => 'tuna@tuna.net',
            'password' => \Illuminate\Support\Facades\Hash::make('482505'),
            'email_verified_at' => \Carbon\Carbon::now()->timestamp
        ]);
    }
}
