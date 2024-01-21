<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;


class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => '山田太郎',
            'email' => 'aaa@gmail.com',
            'password' => Hash::make('aaaaa'),
            'industry_id' => 1,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '田中太郎',
            'email' => 'bbb@gmail.com',
            'password' => Hash::make('bbbbb'),
            'industry_id' => 2,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => '山田花子',
            'email' => 'ccc@gmail.com',
            'password' => Hash::make('ccccc'),
            'industry_id' => 3,
            'profile' => 'こんにちは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'lev',
            'email' => 'lev@gmail.com',
            'password' => Hash::make('levtechtd'),
            'industry_id'=>2,
            'profile'=>'これが私のプロフィール',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
