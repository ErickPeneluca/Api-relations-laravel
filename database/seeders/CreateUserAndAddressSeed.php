<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Fix: Correct namespace

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert user record
        $userId = DB::table('users')->insertGetId([
            "name" => "cardosinha",
            "email" => "jumentinhabasa@gmail.com",
            "password" => Hash::make("1234")
        ]);

        // Insert address record with the user_id foreign key
        DB::table('addresses')->insert([
            "address" => "Rua do pombal, 23"
        ]);
    }
}
