<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Dog::truncate();
        \App\Dog::create(['name' => 'Joe']);
        \App\Dog::create(['name' => 'Jock']);
        \App\Dog::create(['name' => 'Jackie']);
        \App\Dog::create(['name' => 'Jane']);
    }
}
