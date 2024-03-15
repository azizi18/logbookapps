<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->delete();

        // User::truncate();
        User::create([
            'nama' => 'admin',
            'username' => 'admin1',
            'password' => bcrypt('admin'),
            'level' => 'admin',

        ]);
        
    }
}
