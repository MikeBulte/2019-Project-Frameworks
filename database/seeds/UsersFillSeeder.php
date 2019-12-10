<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersFillSeeder extends Seeder
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
        $juryRole = config('roles.models.role')::where('name', '=', 'Jury')->first();


        $createAdmin = $this->command->ask('Hoeveel admins wil je?');
        $createJury = $this->command->ask('Hoeveel juryleden wil je?');
        $createUser = $this->command->ask('Hoeveel deelnemers wil je?');

        $users = factory(App\User::class, (int) $createAdmin)->create();
        foreach ($users as $user)
        {
            $user->attachRole($adminRole);
        }

        $users = factory(App\User::class, (int) $createJury)->create();
        foreach ($users as $user)
        {
            $user->attachRole($juryRole);
        }

        $users = factory(App\User::class, (int) $createUser)->create();
        foreach ($users as $user)
        {
            $user->attachRole($userRole);
        }
    }
}
