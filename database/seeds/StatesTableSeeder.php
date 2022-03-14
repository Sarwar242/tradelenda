<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'id' => 1,
                'name' => 'Federal Capital Territory',
                'country_id' => '1',
            ],
            [
                'id' => 2,
                'name' => 'Abia',
                'country_id' => '1',
            ],
            [
                'id' => 3,
                'name' => 'Adamawa',
                'country_id' => '1',
            ],
            [
                'id' => 4,
                'name' => '	Akwa Ibom',
                'country_id' => '1',
            ],
            [
                'id' => 5,
                'name' => 'Anambra',
                'country_id' => '1',
            ],
            [
                'id' => 6,
                'name' => 'Bauchi',
                'country_id' => '1',
            ],
            [
                'id' => 7,
                'name' => 'Bayelsa',
                'country_id' => '1',
            ],
            [
                'id' => 8,
                'name' => 'Benue',
                'country_id' => '1',
            ],
            [
                'id' => 9,
                'name' => 'Borno',
                'country_id' => '1',
            ],
            [
                'id' => 10,
                'name' => 'Cross River',
                'country_id' => '1',
            ],
            [
                'id' => 11,
                'name' => 'Delta',
                'country_id' => '1',
            ],
            [
                'id' => 12,
                'name' => 'Ebonyi',
                'country_id' => '1',
            ],
            [
                'id' => 13,
                'name' => 'Edo',
                'country_id' => '1',
            ],
            [
                'id' => 14,
                'name' => 'Ekiti',
                'country_id' => '1',
            ],
            [
                'id' => 15,
                'name' => 'Enugu',
                'country_id' => '1',
            ],
            [
                'id' => 16,
                'name' => 'Gombe',
                'country_id' => '1',
            ],
            [
                'id' => 17,
                'name' => 'Imo',
                'country_id' => '1',
            ],
            [
                'id' => 18,
                'name' => 'Jigawa',
                'country_id' => '1',
            ],
            [
                'id' => 19,
                'name' => '	Kaduna',
                'country_id' => '1',
            ],
            [
                'id' => 20,
                'name' => 'Kano',
                'country_id' => '1',
            ],
            [
                'id' => 21,
                'name' => 'Katsina',
                'country_id' => '1',
            ],
            [
                'id' => 22,
                'name' => 'Kebbi',
                'country_id' => '1',
            ],
            [
                'id' => 23,
                'name' => 'Kogi',
                'country_id' => '1',
            ],
            [
                'id' => 24,
                'name' => 'Kwara',
                'country_id' => '1',
            ],
            [
                'id' => 25,
                'name' => 'Lagos',
                'country_id' => '1',
            ],
            [
                'id' => 26,
                'name' => 'Nasarawa',
                'country_id' => '1',
            ],
            [
                'id' => 27,
                'name' => 'Niger',
                'country_id' => '1',
            ],
            [
                'id' => 28,
                'name' => 'Ogun',
                'country_id' => '1',
            ],
            [
                'id' => 29,
                'name' => 'Ondo',
                'country_id' => '1',
            ],
            [
                'id' => 30,
                'name' => 'Osun',
                'country_id' => '1',
            ],
            [
                'id' => 31,
                'name' => 'Oyo',
                'country_id' => '1',
            ],
            [
                'id' => 32,
                'name' => 'Plateau',
                'country_id' => '1',
            ],
            [
                'id' => 33,
                'name' => 'Rivers',
                'country_id' => '1',
            ],
            [
                'id' => 34,
                'name' => 'Sokoto',
                'country_id' => '1',
            ],
            [
                'id' => 35,
                'name' => 'Taraba',
                'country_id' => '1',
            ],
            [
                'id' => 36,
                'name' => 'Yobe',
                'country_id' => '1',
            ],
            /* [
                'id' => 2,
                'name' => 'Yobe',
                'country_id' => '1',
            ], */
            [
                'id' => 37,
                'key' => 'Zamfara',
                'country_id' => '1', 
            ]
        ]);
    }
}
