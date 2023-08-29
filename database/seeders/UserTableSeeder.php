<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Kleber Soares',
            'email' => 'kleber@galaxyz.com.br',
            'password' => bcrypt('1234567890'),
            'grupo_id' => '1',

        ]);
    }
}
