<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogBook;

class LogBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LogBook::factory()->count(50)->create();
    }
}
