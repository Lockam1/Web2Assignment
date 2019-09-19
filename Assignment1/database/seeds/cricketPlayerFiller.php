<?php

use Illuminate\Database\Seeder;

class cricketPlayerFiller extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            ['name' => 'Kane Williamson', 'age' => '29', 'role' => 'Top-order', 'batting' => 'Right-hand', 'bowling' => 'Right-arm offbreak', 'image' => 'williamson.jpg', 'odiRuns' => '6132', 'country_id' => '1'],
            ['name' => 'Trent Boult', 'age' => '29', 'role' => 'Bowler', 'batting' => 'Right-hand', 'bowling' => 'Left-arm fast-medium', 'image' => 'boult.jpg', 'odiRuns' => '154', 'country_id' => '1'],
            ['name' => 'Tom Blundell', 'age' => '28', 'role' => 'WicketKeeper', 'batting' => 'Right-hand', 'bowling' => 'Right-arm offbreak', 'image' => 'blundell.jpg', 'odiRuns' => '0', 'country_id' => '1'],
            ['name' => 'Colin de Grandhomme', 'age' => '32', 'role' => 'AllRounder', 'batting' => 'Right-hand', 'bowling' => 'Right-arm fast-medium', 'image' => 'grandhomme.jpg', 'odiRuns' => '633', 'country_id' => '1'],
            ['name' => 'Lockie Ferguson', 'age' => '27', 'role' => 'Bowler', 'batting' => 'Right-hand', 'bowling' => 'Right-arm fast', 'image' => 'ferguson.jpg', 'odiRuns' => '62', 'country_id' => '1'],
            ['name' => 'Martin Guptill', 'age' => '32', 'role' => 'Opening Batsman', 'batting' => 'Right-hand', 'bowling' => 'Right-arm offbreak', 'image' => 'guptil.jpg', 'odiRuns' => '6626', 'country_id' => '1'],
            ['name' => 'Matt Henry', 'age' => '27', 'role' => 'Bowler', 'batting' => 'Right-hand', 'bowling' => 'Right-arm fast-medium', 'image' => 'henry.jpg', 'odiRuns' => '221', 'country_id' => '1'],
            ['name' => 'Tom Latham', 'age' => '27', 'role' => 'WicketKeeper', 'batting' => 'left-hand', 'bowling' => 'Right-arm medium', 'image' => 'latham.jpg', 'odiRuns' => '2550', 'country_id' => '1'],
            ['name' => 'Colin Munro', 'age' => '32', 'role' => 'Middle-order', 'batting' => 'left-hand', 'bowling' => 'Right-arm medium-fast', 'image' => 'munro.jpg', 'odiRuns' => '1271', 'country_id' => '1'],
            ['name' => 'James Neesham', 'age' => '28', 'role' => 'Batter allrounder', 'batting' => 'left-hand', 'bowling' => 'Right-arm medium', 'image' => 'neesham.jpg', 'odiRuns' => '1247', 'country_id' => '1'],
            ['name' => 'Henry Nicholls', 'age' => '27', 'role' => 'Top-order allrounder', 'batting' => 'left-hand', 'bowling' => 'Right-arm offbreak', 'image' => 'nicholls.jpg', 'odiRuns' => '1120', 'country_id' => '1'],
            ['name' => 'Mitchell Santner', 'age' => '27', 'role' => 'Bowling allrounder', 'batting' => 'left-hand', 'bowling' => 'Slow left-arm orthodox', 'image' => 'santer.jpg', 'odiRuns' => '898', 'country_id' => '1'],
            ['name' => 'Ish Sodhi', 'age' => '26', 'role' => 'Bowler', 'batting' => 'Right-hand', 'bowling' => 'Legbreak', 'image' => 'sodhi.jpg', 'odiRuns' => '67', 'country_id' => '1'],
            ['name' => 'Tim Southee,', 'age' => '30', 'role' => 'Bowler', 'batting' => 'Right-hand', 'bowling' => 'Right-arm medium-fast', 'image' => 'southee.jpg', 'odiRuns' => '676', 'country_id' => '1'],
            ['name' => 'Ross Taylor', 'age' => '35', 'role' => 'Middle-order', 'batting' => 'Right-hand', 'bowling' => 'Right-arm medium-fast', 'image' => 'taylor.jpg', 'odiRuns' => '8376', 'country_id' => '1']
            ]);
    }
}
