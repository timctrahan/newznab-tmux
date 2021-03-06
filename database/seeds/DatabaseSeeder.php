<?php

use Illuminate\Database\Seeder;
use Bhuvidya\Countries\CountriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(RootCategoriesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryRegexesTableSeeder::class);
        $this->call(CollectionRegexesTableSeeder::class);
        $this->call(BinaryblacklistTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(ReleaseNamingRegexesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
    }
}
