<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(OrganizationsTableSeeder::class);
         $this->call(BookmarksTableSeeder::class);
         $this->call(CollectionsTableSeeder::class);
    }
}
