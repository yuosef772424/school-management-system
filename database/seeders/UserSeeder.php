<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'مدير النظام',
            'email' => 'admin@school.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '777123456',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'المحاسب',
            'email' => 'accountant@school.com',
            'password' => Hash::make('accountant123'),
            'role' => 'accountant',
            'phone' => '777654321',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'مشاهد',
            'email' => 'viewer@school.com',
            'password' => Hash::make('viewer123'),
            'role' => 'viewer',
            'phone' => '777999888',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);
    }
}
