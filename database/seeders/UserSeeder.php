<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //admin & user
        $user = [
            [
               'username'=>'Admin',
               'name'=>'Sebagai Admin',
               'email'=>'admin@examples.com',
                'CheckRole'=>'true',
               'password'=> bcrypt('admin12345'),
            ],
            [
               'username'=>'User',
               'name'=>'Sebagai User',
               'email'=>'user@example.com',
                'CheckRole'=>'false',
               'password'=> bcrypt('user12345'),
               
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
   