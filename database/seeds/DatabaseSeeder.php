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
            UsersTableSeeder::class,
            ActivitiesTableSeeder::class,
            MutualsTableSeeder::class,
            PensionsTableSeeder::class,
            AnimationsTableSeeder::class,
            MembersTableSeeder::class,
            Activities_MembersTableSeeder::class,
        ]);
    }
}
