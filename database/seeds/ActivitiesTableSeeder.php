<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            ['id' => 1,'name' => 'Gym douce ludique'],
            ['id' => 2,'name' => 'Gym Pilates'],
            ['id' => 3,'name' => 'Marche douce avec bâtons'],
            ['id' => 4,'name' => 'Marche Nordique douce'],
            ['id' => 5,'name' => 'Marche Nordique active'],
        ];

        Activity::insert($activities);
    }
}