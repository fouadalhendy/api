<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run()
    {
        User::create([
            'name' => 'fuoad',
            'email' => 'fuoad@gamil.com',
            'password' => '123123123',
            'imge'=>'admin.gpj',
            'is_admin'=>true,
        ]);
    }

    }

