<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            "name" => "admin",
            "email" => "admin@mail.com",
            "password" => Hash::make("123123123"),
        ]);
        $role = Role::create(
            [
                "name" => "admin",
            ],
        );

        $user->assignRole($role);
    }
}
