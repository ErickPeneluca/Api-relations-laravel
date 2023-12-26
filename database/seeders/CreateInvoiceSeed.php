<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Fix: Correct namespace
use Illuminate\Support\Facades\Schema;

class CreateInvoiceSeed extends Seeder
{
    public function run(): void
    {
        DB::table('invoice')->insertGetId([
            'description' => "bllablalbla",
            'valor' => "10.50",
            'address_id'=> 1,
            'user_id' => 1
        ]);
    }
}
