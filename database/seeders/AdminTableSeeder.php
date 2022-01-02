<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'lastname'=>'lastname',
            'email'=>'tasnimfarah14@gmail.com',
            'password'=>bcrypt('123'),
            'phone'=>'01815678899',
            'role'=>'admin',

        ]);
    }
}
