<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::create([
                'name'=>'Germán Parra Araque',
                'email'=>'gapag.44@hotmail.com',
                'password' =>bcrypt('12345678')
            ]);

        $user->assignRole('Admin');

        User::factory(99)->create();
    }
}
