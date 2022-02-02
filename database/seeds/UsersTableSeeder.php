<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            'name'=>'Anthony',
            'email'=>'anthonyamb17@gmail.com',
            'password'=>'$2y$10$1ODKpeVC/iZkEQbWmApaT.aavcbdS.YzIuinhZUZBY5OnnL3hA6d.',
        ]);

        $user->roles()->sync(1);
    }
}
