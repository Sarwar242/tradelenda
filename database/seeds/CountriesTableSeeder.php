<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'id' => 1,
                'name' => 'Nigeria',
                'short_name' => 'NG',
            ],
            /* [
                'id' => 2,
                'key' => 'Bangladesh',
                'value' => 'BD',
            ] */
        ]);
    }
}
