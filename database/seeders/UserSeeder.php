<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => '山田太郎',
            'email' => 'aaa@aaa.com',
            'password' => 'aaaaa',
            'industry_id' => 1,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '田中太郎',
            'email' => 'bbb@bbb.com',
            'password' => 'bbbbb',
            'industry_id' => 2,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '山田花子',
            'email' => 'ccc@ccc.com',
            'password' => 'ccccc',
            'industry_id' => 3,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
