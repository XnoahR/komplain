<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=> 'Raychi',
            'email' => 'raychi@gmail.com',
            'password'=> Hash::make('123456'),
            'phone' => '085331886336',
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name'=> 'staff tzy',
            'email' => 'irtzy@staff.com',
            'password'=> Hash::make('staff'),
            'phone' => '081617213287',
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name'=> 'staff ray',
            'email' => 'raychi@staff.com',
            'password'=> Hash::make('staff'),
            'phone' => '085331886336',
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name'=> 'staff bas',
            'email' => 'tulus@staff.com',
            'password'=> Hash::make('staff'),
            'phone' => '089655847696',
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name'=> 'admin',
            'email' => 'admin',
            'password'=> Hash::make('admin'),
            'phone' => '081234567890',
            'role' => '3',
        ]);
        DB::table('users')->insert([
            'name'=> 'manager',
            'email' => 'manager',
            'password'=> Hash::make('password'),
            'phone' => '089876543210',
            'role' => '4',
        ]);
    }
}
