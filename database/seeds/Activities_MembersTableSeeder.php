<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Activities_MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberIds = DB::table('members')->pluck('id');
        $activityIds = DB::table('activities')->pluck('id');
        $pivots = [];
        foreach ($memberIds as $memberId) {
            //necessary since shuffle() and array_shift() take an array by reference
            //iterator_to_array is to convert an Iterator into an array
            $randomizedactivityIds = iterator_to_array($activityIds);
           
            shuffle($randomizedactivityIds);
            for ($i = 0; $i < 3; $i++) {
                $pivots[] = [
                    'member_id' => $memberId,
                    'activity_id' => array_shift($randomizedactivityIds)
                ];
            }
        }

        DB::table('activity_member')->insert($pivots);
    }
}
