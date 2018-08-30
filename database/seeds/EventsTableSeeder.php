<?php

use Illuminate\Database\Seeder;
use App\Event;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ['title' => 'Demo Event-1', 'start_date' => '2018-08-11', 'end_date' => '2018-08-12'],
            ['title' => 'Demo Event-2', 'start_date' => '2018-08-11', 'end_date' => '2018-08-13'],
            ['title' => 'Demo Event-3', 'start_date' => '2018-08-14', 'end_date' => '2018-08-14'],
            ['title' => 'Demo Event-3', 'start_date' => '2018-08-17', 'end_date' => '2018-08-17'],
        ];

        Event::insert($events);
    }
}
