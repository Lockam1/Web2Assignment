<?php

use Illuminate\Database\Seeder;

class countrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            ['id' => '1', 'name' => 'New Zealand', 'flag' => 'NZ flag']
            ]);
    }
}
