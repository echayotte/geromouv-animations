<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActivitiesTableSeeder::class,
            MutualsTableSeeder::class,
            PensionsTableSeeder::class,
            AnimationsTableSeeder::class,
            MembersTableSeeder::class,
            Activities_MembersTableSeeder::class,
        ]);
    }
}
