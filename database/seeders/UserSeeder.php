<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon ;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create seeder to test  ==> create data
        //admin
        $user = User::create([
            'name' => 'KareemDEV',
            'email' => 'kareemtarekpk@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
            'user_type' => 'admin',
        ]);
        // Admin Another
        $user2 = User::create([
            'name' => 'sedeek',
            'email' => 'sedeek@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
            'user_type' => 'admin',
        ]);
        // customer
        $customer = User::create([
            'name' => 'waad',
            'email' => 'waad@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
            'user_type' => 'customer',
        ]);
        // customer  another
        $customer2 = User::create([
            'name' => 'Omar',
            'email' => 'omar@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
            'user_type' => 'customer',
        ]);


        // moderator
        $moderator = User::create([
            'name' => 'Ahmed Sayed',
            'email' => 'Ahmed@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => Carbon::now()->toDateString(),
            'updated_at' => null,
            'user_type' => 'moderator',
        ]);
    }
}
