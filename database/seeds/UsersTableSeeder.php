<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $permissions = config('roles.models.permission')::all();

        /*
         * Add Users
         *
         */
        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'first_name'     => 'Admin',
                'last_name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'password' => Hash::make('password'),
                "api_token" => Str::random(60),
            ]);

            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'first_name'     => 'User',
                'last_name'     => 'Admin',
                'email'    => 'user@user.com',
                'password' => Hash::make('password'),
                "api_token" => Str::random(60),
            ]);

            $newUser->attachRole($userRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }
    }
}
