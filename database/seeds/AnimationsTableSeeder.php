<?php

use Illuminate\Database\Seeder;
use App\Animation;

class AnimationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animations = [
            ['id' => 1, 'name' => 'Séance'],
            ['id' => 2, 'name' => 'Stage'],
            ['id' => 3, 'name' => 'Événement'],
        ];

        Animation::insert($animations);
    }

}
