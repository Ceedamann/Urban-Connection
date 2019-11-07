<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::where("email", "rudeboykilla@gmail.com")->first();
        if(!$user){
            USer::create([
                'name'=> 'Ceedamann',
                'email'=> 'rudeboykilla@gmail.com',
                'role'=> 'admin',
                'password'=> Hash::make('password')

            ]);
        }
    }
}
