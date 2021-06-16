<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('greetings')->insert([

            ['Greetings' => 'Hello, world!'],

            ['Greetings' => 'Good morning'],

            ['Greetings' => 'Good after noon'],

            ['Greetings' => 'Good night'],

            ['Greetings' => 'G’day, mate'],

        ]);
    }
}
