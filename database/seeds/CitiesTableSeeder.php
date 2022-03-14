<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'id' => 1,
                'name' => 'Gwagwalada',
                'state_id' => '1',
            ],
            [
                'id' => 2,
                'name' => 'Kuje',
                'state_id' => '1',
            ],
            [
                'id' => 3,
                'name' => 'Abaji',
                'state_id' => '1',
            ], 
            [
                'id' => 4,
                'name' => 'Abuja Municipal',
                'state_id' => '1',
            ],
            [
                'id' => 5,
                'name' => ' Bwari',
                'state_id' => '1',
            ],
            [
                'id' => 6,
                'name' => 'Kwali',
                'state_id' => '1',
            ],
            [
                'id' => 7,
                'name' => 'Aba-North',
                'state_id' => '2',
            ],
            [
                'id' => 8,
                'name' => 'Aba-South',
                'state_id' => '2',
            ],
            [
                'id' => 9,
                'name' => 'Arochukwu',
                'state_id' => '2',
            ],
            [
                'id' => 10,
                'name' => 'Bende',
                'state_id' => '2',
            ],
            [
                'id' => 11,
                'name' => 'Ikwuano',
                'state_id' => '2',
            ],
            [
                'id' => 12,
                'name' => 'Isiala-Ngwa-North',
                'state_id' => '2',
            ],
            [
                'id' => 13,
                'name' => 'Isiala-Ngwa-South',
                'state_id' => '2',
            ],
            [
                'id' => 14,
                'name' => 'Isuikwato',
                'state_id' => '2',
            ],
            [
                'id' => 15,
                'name' => 'Obi Nwa',
                'state_id' => '2',
            ],
            [
                'id' => 16,
                'name' => 'Ohafia',
                'state_id' => '2',
            ],
            [
                'id' => 17,
                'name' => 'Osisioma',
                'state_id' => '2',
            ],
            [
                'id' => 18,
                'name' => 'Ngwa',
                'state_id' => '2',
            ],
            [
                'id' => 19,
                'name' => 'Ugwunagbo',
                'state_id' => '2',
            ],
            [
                'id' => 20,
                'name' => 'Ukwa-East',
                'state_id' => '2',
            ],
            [
                'id' => 21,
                'name' => 'Ukwa-West',
                'state_id' => '2',
            ],
            [
                'id' => 22,
                'name' => 'Umuahia-North',
                'state_id' => '2',
            ],
            [
                'id' => 23,
                'name' => 'Umuahia-South',
                'state_id' => '2',
            ],
            [
                'id' => 24,
                'name' => 'Umu-Neochi',
                'state_id' => '2',
            ],
            [
                'id' => 25,
                'name' => 'Demsa',
                'state_id' => '3',
            ],
            [
                'id' => 26,
                'name' => 'Fufore',
                'state_id' => '3',
            ],
            [
                'id' => 27,
                'name' => 'Ganaye',
                'state_id' => '3',
            ],
            [
                'id' => 28,
                'name' => 'Gireri',
                'state_id' => '3',
            ],
            [
                'id' => 29,
                'name' => 'Gombi',
                'state_id' => '3',
            ],
            [
                'id' => 30,
                'name' => 'Guyuk',
                'state_id' => '3',
            ],
            [
                'id' => 31,
                'name' => 'Hong',
                'state_id' => '3',
            ],
            [
                'id' => 32,
                'name' => 'Jada',
                'state_id' => '3',
            ],
            [
                'id' => 33,
                'name' => 'Lamurde',
                'state_id' => '3',
            ],
            [
                'id' => 34,
                'name' => 'Madagali',
                'state_id' => '3',
            ],
            [
                'id' => 35,
                'name' => 'Maiha',
                'state_id' => '3',
            ],
            [
                'id' => 36,
                'name' => 'Mayo-Belwa',
                'state_id' => '3',
            ],
            [
                'id' => 37,
                'name' => 'Michika',
                'state_id' => '3',
            ],
            [
                'id' => 38,
                'name' => 'Mubi-North',
                'state_id' => '3',
            ],
            [
                'id' => 39,
                'name' => 'Mubi-South',
                'state_id' => '3',
            ],
            [
                'id' => 40,
                'name' => 'Numan',
                'state_id' => '3',
            ],
            [
                'id' => 41,
                'name' => 'Shelleng',
                'state_id' => '3',
            ],
            [
                'id' => 42,
                'name' => 'Song',
                'state_id' => '3',
            ],
            [
                'id' => 43,
                'name' => 'Toungo',
                'state_id' => '3',
            ],
            [
                'id' => 44,
                'name' => 'Yola-North',
                'state_id' => '3',
            ],
            [
                'id' => 45,
                'name' => 'Yola-South',
                'state_id' => '3',
            ],
            [
                'id' => 46,
                'name' => 'Abak',
                'state_id' => '4',
            ],
            [
                'id' => 47,
                'name' => 'Eastern Obolo',
                'state_id' => '4',
            ],
            [
                'id' => 48,
                'name' => 'Eket',
                'state_id' => '4',
            ],
            [
                'id' => 49,
                'name' => 'Esit Eket',
                'state_id' => '4',
            ],
            [
                'id' => 50,
                'name' => 'Essien Udim',
                'state_id' => '4',
            ],
            [
                'id' => 51,
                'name' => 'Etim Ekpo',
                'state_id' => '4',
            ],
            [
                'id' => 52,
                'name' => 'Etinan',
                'state_id' => '4',
            ],
            [
                'id' => 53,
                'name' => 'Ibeno',
                'state_id' => '4',
            ],
            [
                'id' => 54,
                'name' => 'Ibesikpo Asutan',
                'state_id' => '4',
            ],
            [
                'id' => 55,
                'name' => 'Ibiono Ibom',
                'state_id' => '4',
            ],
            [
                'id' => 56,
                'name' => 'Ika',
                'state_id' => '4',
            ],
            [
                'id' => 57,
                'name' => 'Ikono',
                'state_id' => '4',
            ],
            [
                'id' => 58,
                'name' => 'Ikot-Abasi',
                'state_id' => '4',
            ],
            [
                'id' => 59,
                'name' => 'Ikot-Ekpene',
                'state_id' => '4',
            ],
            [
                'id' => 60,
                'name' => 'Ini',
                'state_id' => '4',
            ],
            [
                'id' => 61,
                'name' => 'Itu',
                'state_id' => '4',
            ],
            [
                'id' => 62,
                'name' => 'Mbo',
                'state_id' => '4',
            ],
            [
                'id' => 63,
                'name' => 'Mkpat Enin',
                'state_id' => '4',
            ],
            [
                'id' => 64,
                'name' => 'Nsit Atai',
                'state_id' => '4',
            ],
            [
                'id' => 65,
                'name' => 'Nsit-Ibom',
                'state_id' => '4',
            ],
            [
                'id' => 66,
                'name' => 'Nsit-Ubium',
                'state_id' => '4',
            ],
            [
                'id' => 67,
                'name' => 'Obot Akara',
                'state_id' => '4',
            ],
            [
                'id' => 68,
                'name' => 'Okobo',
                'state_id' => '4',
            ],
            [
                'id' => 69,
                'name' => 'Onna',
                'state_id' => '4',
            ],
            [
                'id' => 70,
                'name' => 'Oron',
                'state_id' => '4',
            ],
            [
                'id' => 71,
                'name' => 'Oruk Anam',
                'state_id' => '4',
            ],
            [
                'id' => 72,
                'name' => 'Udung Uko',
                'state_id' => '4',
            ],
            [
                'id' => 73,
                'name' => 'Ukanafun',
                'state_id' => '4',
            ],
            [
                'id' => 74,
                'name' => 'Uruan',
                'state_id' => '4',
            ],
            [
                'id' => 75,
                'name' => 'Urue-Offong',
                'state_id' => '4',
            ],
            [
                'id' => 76,
                'name' => 'Oruko',
                'state_id' => '4',
            ],
            [
                'id' => 77,
                'name' => 'Uyo',
                'state_id' => '4',
            ],
            [
                'id' => 78,
                'name' => 'Aguata',
                'state_id' => '5',
            ],
            [
                'id' => 79,
                'name' => 'Anambra-East',
                'state_id' => '5',
            ],
            [
                'id' => 80,
                'name' => 'Anambra-West',
                'state_id' => '5',
            ],
            [
                'id' => 81,
                'name' => 'Anaocha',
                'state_id' => '5',
            ],
            [
                'id' => 82,
                'name' => 'Awka-North',
                'state_id' => '5',
            ],
            [
                'id' => 83,
                'name' => 'Awka-South',
                'state_id' => '5',
            ],
            [
                'id' => 84,
                'name' => 'Ayamelum',
                'state_id' => '5',
            ],
            [
                'id' => 85,
                'name' => 'Dunukofia',
                'state_id' => '5',
            ],
            [
                'id' => 86,
                'name' => 'Ekwusigo',
                'state_id' => '5',
            ],
            [
                'id' => 87,
                'name' => 'Idemili-North',
                'state_id' => '5',
            ],
            [
                'id' => 88,
                'name' => 'Idemili-South',
                'state_id' => '5',
            ],
            [
                'id' => 89,
                'name' => 'Ihiala',
                'state_id' => '5',
            ],
            [
                'id' => 90,
                'name' => 'Njikoka',
                'state_id' => '5',
            ],
            [
                'id' => 91,
                'name' => 'Nnewi-North',
                'state_id' => '5',
            ],
            [
                'id' => 92,
                'name' => 'Nnewi-South',
                'state_id' => '5',
            ],
            [
                'id' => 93,
                'name' => 'Ogbaru',
                'state_id' => '5',
            ],
            [
                'id' => 94,
                'name' => 'Onitsha-North',
                'state_id' => '5',
            ],
            [
                'id' => 95,
                'name' => 'Onitsha-South',
                'state_id' => '5',
            ],
            [
                'id' => 96,
                'name' => 'Orumba-North',
                'state_id' => '5',
            ],
            [
                'id' => 97,
                'name' => 'Orumba-South',
                'state_id' => '5',
            ],
            [
                'id' => 98,
                'name' => 'Oyi',
                'state_id' => '5',
            ],
            [
                'id' => 99,
                'name' => 'Alkaleri',
                'state_id' => '6',
            ],
            [
                'id' => 100,
                'name' => 'Bauchi',
                'state_id' => '6',
            ],
            [
                'id' => 101,
                'name' => 'Bogoro',
                'state_id' => '6',
            ],
            [
                'id' => 102,
                'name' => 'Damban',
                'state_id' => '6',
            ],
            [
                'id' => 103,
                'name' => 'Darazo',
                'state_id' => '6',
            ],
            [
                'id' => 104,
                'name' => 'Dass',
                'state_id' => '6',
            ],
            [
                'id' => 105,
                'name' => 'Ganjuwa',
                'state_id' => '6',
            ],
            [
                'id' => 106,
                'name' => 'Giade',
                'state_id' => '6',
            ],
            [
                'id' => 107,
                'name' => 'Itas/Gadau',
                'state_id' => '6',
            ],
            [
                'id' => 108,
                'name' => 'Jama-are',
                'state_id' => '6',
            ],
            [
                'id' => 109,
                'name' => 'Katagum',
                'state_id' => '6',
            ],
            [
                'id' => 110,
                'name' => 'Kirfi',
                'state_id' => '6',
            ],
            [
                'id' => 111,
                'name' => 'Misau',
                'state_id' => '6',
            ],
            [
                'id' => 112,
                'name' => 'Ningi',
                'state_id' => '6',
            ],
            [
                'id' => 113,
                'name' => 'Shira',
                'state_id' => '6',
            ],
            [
                'id' => 114,
                'name' => 'Tafawa-Balewa',
                'state_id' => '6',
            ],
            [
                'id' => 115,
                'name' => 'Toro',
                'state_id' => '6',
            ],
            [
                'id' => 116,
                'name' => 'Warji',
                'state_id' => '6',
            ],
            [
                'id' => 117,
                'name' => 'Zaki',
                'state_id' => '6',
            ],
            [
                'id' => 118,
                'name' => 'Brass',
                'state_id' => '7',
            ],
            [
                'id' => 119,
                'name' => 'Ekeremor',
                'state_id' => '7',
            ],
            [
                'id' => 120,
                'name' => 'Kolokuma/Opokuma',
                'state_id' => '7',
            ],
            [
                'id' => 121,
                'name' => 'Nembe',
                'state_id' => '7',
            ],
            [
                'id' => 122,
                'name' => 'Ogbia',
                'state_id' => '7',
            ],
            [
                'id' => 123,
                'name' => 'Sagbama',
                'state_id' => '7',
            ],
            [
                'id' => 124,
                'name' => 'Southern Jaw',
                'state_id' => '7',
            ],
            [
                'id' => 125,
                'name' => 'Yenegoa',
                'state_id' => '7',
            ],
            [
                'id' => 126,
                'name' => 'Ado',
                'state_id' => '8',
            ],
            [
                'id' => 127,
                'name' => 'Agatu',
                'state_id' => '8',
            ],
            [
                'id' => 128,
                'name' => 'Apa',
                'state_id' => '8',
            ],
            [
                'id' => 129,
                'name' => 'Buruku',
                'state_id' => '8',
            ],
            [
                'id' => 130,
                'name' => 'Gboko',
                'state_id' => '8',
            ],
            [
                'id' => 131,
                'name' => 'Guma',
                'state_id' => '8',
            ],
            [
                'id' => 132,
                'name' => 'Gwer-East',
                'state_id' => '8',
            ],
            [
                'id' => 133,
                'name' => 'Gwer-West',
                'state_id' => '8',
            ],
            [
                'id' => 134,
                'name' => 'Katsina-Ala',
                'state_id' => '8',
            ],
            [
                'id' => 135,
                'name' => 'Konshisha',
                'state_id' => '8',
            ],
            [
                'id' => 136,
                'name' => 'Kwande',
                'state_id' => '8',
            ],
            [
                'id' => 137,
                'name' => 'Logo',
                'state_id' => '8',
            ],
            [
                'id' => 138,
                'name' => 'Makurdi',
                'state_id' => '8',
            ],
            [
                'id' => 139,
                'name' => 'Obi',
                'state_id' => '8',
            ],
            [
                'id' => 140,
                'name' => 'Ogbadibo',
                'state_id' => '8',
            ],
            [
                'id' => 141,
                'name' => 'Oju',
                'state_id' => '8',
            ],
            [
                'id' => 142,
                'name' => 'Okpokwu',
                'state_id' => '8',
            ],
            [
                'id' => 143,
                'name' => 'Ohimini',
                'state_id' => '8',
            ],
            [
                'id' => 144,
                'name' => 'Oturkpo',
                'state_id' => '8',
            ],
            [
                'id' => 145,
                'name' => 'Tarka',
                'state_id' => '8',
            ],
            [
                'id' => 146,
                'name' => 'Ukum',
                'state_id' => '8',
            ],
            [
                'id' => 147,
                'name' => 'Ushongo',
                'state_id' => '8',
            ],
            [
                'id' => 148,
                'name' => 'Vandeikya',
                'state_id' => '8',
            ],
            [
                'id' => 149,
                'name' => 'Abadam',
                'state_id' => '9',
            ],
            [
                'id' => 150,
                'name' => 'Askira/Uba',
                'state_id' => '9',
            ],
            [
                'id' => 151,
                'name' => 'Bama',
                'state_id' => '9',
            ],
            [
                'id' => 152,
                'name' => 'Bayo',
                'state_id' => '9',
            ],
            [
                'id' => 153,
                'name' => 'Biu',
                'state_id' => '9',
            ],
            [
                'id' => 154,
                'name' => 'Chibok',
                'state_id' => '9',
            ],
            [
                'id' => 155,
                'name' => 'Damboa',
                'state_id' => '9',
            ],
            [
                'id' => 156,
                'name' => 'Dikwa',
                'state_id' => '9',
            ],
            [
                'id' => 157,
                'name' => 'Gubio',
                'state_id' => '9',
            ],
            [
                'id' => 158,
                'name' => 'Guzamala',
                'state_id' => '9',
            ],
            [
                'id' => 159,
                'name' => 'Gwoza',
                'state_id' => '9',
            ],
            [
                'id' => 160,
                'name' => 'Hawul',
                'state_id' => '9',
            ],
            [
                'id' => 161,
                'name' => 'Jere',
                'state_id' => '9',
            ],
            [
                'id' => 162,
                'name' => 'Kaga',
                'state_id' => '9',
            ],
            [
                'id' => 163,
                'name' => 'Kala/Balge',
                'state_id' => '9',
            ],
            [
                'id' => 164,
                'name' => 'Konduga',
                'state_id' => '9',
            ],
            [
                'id' => 165,
                'name' => 'Kukawa',
                'state_id' => '9',
            ],
            [
                'id' => 166,
                'name' => 'Kwaya Kusar',
                'state_id' => '9',
            ],
            [
                'id' => 167,
                'name' => 'Mafa',
                'state_id' => '9',
            ],
            [
                'id' => 168,
                'name' => 'Magumeri',
                'state_id' => '9',
            ],
            [
                'id' => 169,
                'name' => 'Maiduguri',
                'state_id' => '9',
            ],
            [
                'id' => 170,
                'name' => 'Marte',
                'state_id' => '9',
            ],
            [
                'id' => 171,
                'name' => 'Mobbar',
                'state_id' => '9',
            ],
            [
                'id' => 172,
                'name' => 'Monguno',
                'state_id' => '9',
            ],
            [
                'id' => 173,
                'name' => 'Ngala',
                'state_id' => '9',
            ],
            [
                'id' => 174,
                'name' => 'Nganzai',
                'state_id' => '9',
            ],
            [
                'id' => 175,
                'name' => 'Shani',
                'state_id' => '9',
            ],
            [
                'id' => 176,
                'name' => 'Akpabuyo',
                'state_id' => '10',
            ],
            [
                'id' => 177,
                'name' => 'Odukpani',
                'state_id' => '10',
            ],
            [
                'id' => 178,
                'name' => 'Akamkpa',
                'state_id' => '10',
            ],
            [
                'id' => 179,
                'name' => 'Biase',
                'state_id' => '10',
            ],
            [
                'id' => 180,
                'name' => 'Abi',
                'state_id' => '10',
            ],
            [
                'id' => 181,
                'name' => 'Ikom',
                'state_id' => '10',
            ],
            [
                'id' => 182,
                'name' => 'Yarkur',
                'state_id' => '10',
            ],
            [
                'id' => 183,
                'name' => 'Odubra',
                'state_id' => '10',
            ],
            [
                'id' => 184,
                'name' => 'Boki',
                'state_id' => '10',
            ],
            [
                'id' => 185,
                'name' => 'Ogoja',
                'state_id' => '10',
            ],
            [
                'id' => 186,
                'name' => 'Yala',
                'state_id' => '10',
            ],
            [
                'id' => 187,
                'name' => 'Obanliku',
                'state_id' => '10',
            ],
            [
                'id' => 188,
                'name' => 'Obudu',
                'state_id' => '10',
            ],
            [
                'id' => 189,
                'name' => 'Calabar-South',
                'state_id' => '10',
            ],
            [
                'id' => 190,
                'name' => 'Etung',
                'state_id' => '10',
            ],
            [
                'id' => 191,
                'name' => 'Bekwara',
                'state_id' => '10',
            ],
            [
                'id' => 192,
                'name' => 'Bakassi',
                'state_id' => '10',
            ],
            [
                'id' => 193,
                'name' => 'Calabar-Municipality',
                'state_id' => '10',
            ],
            [
                'id' => 194,
                'name' => 'Oshimili',
                'state_id' => '11',
            ],
            [
                'id' => 195,
                'name' => 'Aniocha',
                'state_id' => '11',
            ],
            [
                'id' => 196,
                'name' => 'Aniocha South',
                'state_id' => '11',
            ],
            [
                'id' => 197,
                'name' => 'Ika South',
                'state_id' => '11',
            ],
            [
                'id' => 198,
                'name' => 'Ika North-East',
                'state_id' => '11',
            ],
            [
                'id' => 199,
                'name' => 'Ndokwa West',
                'state_id' => '11',
            ],
            [
                'id' => 200,
                'name' => 'Ndokwa East',
                'state_id' => '11',
            ],
            [
                'id' => 201,
                'name' => 'Isoko south',
                'state_id' => '11',
            ],
            [
                'id' => 202,
                'name' => 'Isoko North',
                'state_id' => '11',
            ],
            [
                'id' => 203,
                'name' => 'Bomadi',
                'state_id' => '11',
            ],
            [
                'id' => 204,
                'name' => 'Burutu',
                'state_id' => '11',
            ],
            [
                'id' => 205,
                'name' => 'Ughelli South',
                'state_id' => '11',
            ],
            [
                'id' => 206,
                'name' => 'Ughelli North',
                'state_id' => '11',
            ],
            [
                'id' => 207,
                'name' => 'Ethiope West',
                'state_id' => '11',
            ],
            [
                'id' => 208,
                'name' => 'Ethiope East',
                'state_id' => '11',
            ],
            [
                'id' => 209,
                'name' => 'Sapele',
                'state_id' => '11',
            ],
            [
                'id' => 210,
                'name' => 'Okpe',
                'state_id' => '11',
            ],
            [
                'id' => 211,
                'name' => 'Warri North',
                'state_id' => '11',
            ],
            [
                'id' => 212,
                'name' => 'Warri South',
                'state_id' => '11',
            ],
            [
                'id' => 213,
                'name' => 'Uvwie',
                'state_id' => '11',
            ],
            [
                'id' => 214,
                'name' => 'Udu',
                'state_id' => '11',
            ],
            [
                'id' => 215,
                'name' => 'Warri Central',
                'state_id' => '11',
            ],
            [
                'id' => 216,
                'name' => 'Ukwani',
                'state_id' => '11',
            ],
            [
                'id' => 217,
                'name' => 'Oshimili North',
                'state_id' => '11',
            ],
            [
                'id' => 218,
                'name' => 'Patani',
                'state_id' => '11',
            ],
            [
                'id' => 219,
                'name' => 'Afikpo South',
                'state_id' => '12',
            ],
            [
                'id' => 220,
                'name' => 'Afikpo North',
                'state_id' => '12',
            ],
            [
                'id' => 221,
                'name' => 'Onicha',
                'state_id' => '12',
            ],
            [
                'id' => 222,
                'name' => 'Ohaozara',
                'state_id' => '12',
            ],
            [
                'id' => 223,
                'name' => 'Abakaliki',
                'state_id' => '12',
            ],
            [
                'id' => 224,
                'name' => 'Ishielu',
                'state_id' => '12',
            ],
            [
                'id' => 225,
                'name' => 'lkwo',
                'state_id' => '12',
            ],
            [
                'id' => 226,
                'name' => 'Ezza',
                'state_id' => '12',
            ],
            [
                'id' => 227,
                'name' => 'Ezza South',
                'state_id' => '12',
            ],
            [
                'id' => 228,
                'name' => 'Ohaukwu',
                'state_id' => '12',
            ],
            [
                'id' => 229,
                'name' => 'Ebonyi',
                'state_id' => '12',
            ],
            [
                'id' => 230,
                'name' => 'Ivo',
                'state_id' => '12',
            ],
            [
                'id' => 231,
                'name' => 'Esan North-East',
                'state_id' => '13',
            ],
            [
                'id' => 232,
                'name' => 'Esan Central',
                'state_id' => '13',
            ],
            [
                'id' => 233,
                'name' => 'Esan West',
                'state_id' => '13',
            ],
            [
                'id' => 234,
                'name' => 'Egor',
                'state_id' => '13',
            ],
            [
                'id' => 235,
                'name' => 'Ukpoba',
                'state_id' => '13',
            ],
            [
                'id' => 236,
                'name' => 'Central',
                'state_id' => '13',
            ],
            [
                'id' => 237,
                'name' => 'Etsako Central',
                'state_id' => '13',
            ],
            [
                'id' => 238,
                'name' => 'Igueben',
                'state_id' => '13',
            ],
            [
                'id' => 239,
                'name' => 'Oredo',
                'state_id' => '13',
            ],
            [
                'id' => 240,
                'name' => 'Ovia SouthWest',
                'state_id' => '13',
            ],
            [
                'id' => 241,
                'name' => 'Ovia South-East',
                'state_id' => '13',
            ],
            [
                'id' => 242,
                'name' => 'Orhionwon',
                'state_id' => '13',
            ],
            [
                'id' => 243,
                'name' => 'Uhunmwonde',
                'state_id' => '13',
            ],
            [
                'id' => 244,
                'name' => 'Etsako East',
                'state_id' => '13',
            ],
            [
                'id' => 245,
                'name' => 'Esan South-East',
                'state_id' => '13',
            ],
            [
                'id' => 246,
                'name' => 'Ado',
                'state_id' => '14',
            ],
            [
                'id' => 247,
                'name' => 'Ekiti-East',
                'state_id' => '14',
            ],
            [
                'id' => 248,
                'name' => 'Ekiti-West',
                'state_id' => '14',
            ],
            [
                'id' => 249,
                'name' => 'Emure/Ise/Orun',
                'state_id' => '14',
            ],
            [
                'id' => 250,
                'name' => 'Ikare',
                'state_id' => '14',
            ],
            [
                'id' => 251,
                'name' => 'Irepodun',
                'state_id' => '14',
            ],
            [
                'id' => 252,
                'name' => 'Ijero',
                'state_id' => '14',
            ],
            [
                'id' => 253,
                'name' => 'Ido/Osi',
                'state_id' => '14',
            ],
            [
                'id' => 254,
                'name' => 'Oye',
                'state_id' => '14',
            ],
            [
                'id' => 255,
                'name' => 'Ikole',
                'state_id' => '14',
            ],
            [
                'id' => 256,
                'name' => 'Moba',
                'state_id' => '14',
            ],
            [
                'id' => 257,
                'name' => 'Gbonyin',
                'state_id' => '14',
            ],
            [
                'id' => 258,
                'name' => 'Efon',
                'state_id' => '14',
            ],
            [
                'id' => 259,
                'name' => 'Ise/Orun',
                'state_id' => '14',
            ],
            [
                'id' => 260,
                'name' => 'Ilejemeje',
                'state_id' => '14',
            ],
            [
                'id' => 261,
                'name' => 'Enugu South',
                'state_id' => '15',
            ],
            [
                'id' => 262,
                'name' => 'Igbo-Eze South',
                'state_id' => '15',
            ],
            [
                'id' => 263,
                'name' => 'Enugu North',
                'state_id' => '15',
            ],
            [
                'id' => 264,
                'name' => 'Nkanu',
                'state_id' => '15',
            ],
            [
                'id' => 265,
                'name' => 'Udi Agwu',
                'state_id' => '15',
            ],
            [
                'id' => 266,
                'name' => 'Oji-River',
                'state_id' => '15',
            ],
            [
                'id' => 267,
                'name' => 'Ezeagu',
                'state_id' => '15',
            ],
            [
                'id' => 268,
                'name' => 'IgboEze North',
                'state_id' => '15',
            ],
            [
                'id' => 269,
                'name' => 'Isi-Uzo',
                'state_id' => '15',
            ],
            [
                'id' => 270,
                'name' => 'Nsukka',
                'state_id' => '15',
            ],
            [
                'id' => 271,
                'name' => 'Igbo-Ekiti',
                'state_id' => '15',
            ],
            [
                'id' => 272,
                'name' => 'Uzo-Uwani',
                'state_id' => '15',
            ],
            [
                'id' => 273,
                'name' => 'Enugu Eas',
                'state_id' => '15',
            ],
            [
                'id' => 274,
                'name' => 'Aninri',
                'state_id' => '15',
            ],
            [
                'id' => 275,
                'name' => 'Nkanu East',
                'state_id' => '15',
            ],
            [
                'id' => 276,
                'name' => 'Udenu',
                'state_id' => '15',
            ],
            [
                'id' => 277,
                'name' => 'Akko',
                'state_id' => '16',
            ],
            [
                'id' => 278,
                'name' => 'Balanga',
                'state_id' => '16',
            ],
            [
                'id' => 279,
                'name' => 'Billiri',
                'state_id' => '16',
            ],
            [
                'id' => 280,
                'name' => 'Dukku',
                'state_id' => '16',
            ],
            [
                'id' => 281,
                'name' => 'Kaltungo',
                'state_id' => '16',
            ],
            [
                'id' => 282,
                'name' => 'Kwami',
                'state_id' => '16',
            ],
            [
                'id' => 283,
                'name' => 'Shomgom',
                'state_id' => '16',
            ],
            [
                'id' => 284,
                'name' => 'Funakaye',
                'state_id' => '16',
            ],
            [
                'id' => 285,
                'name' => 'Gombe',
                'state_id' => '16',
            ],
            [
                'id' => 286,
                'name' => 'Nafada/Bajoga',
                'state_id' => '16',
            ],
            [
                'id' => 287,
                'name' => 'Yamaltu/Delta',
                'state_id' => '16',
            ],
            [
                'id' => 288,
                'name' => 'Aboh-Mbaise',
                'state_id' => '17',
            ],
            [
                'id' => 289,
                'name' => 'Ahiazu-Mbaise',
                'state_id' => '17',
            ],
            [
                'id' => 290,
                'name' => 'Ehime-Mbano',
                'state_id' => '17',
            ],
            [
                'id' => 291,
                'name' => 'Ezinihitte',
                'state_id' => '17',
            ],
            [
                'id' => 292,
                'name' => 'Ideato North',
                'state_id' => '17',
            ],
            [
                'id' => 293,
                'name' => 'Ideato South',
                'state_id' => '17',
            ],
            [
                'id' => 294,
                'name' => 'Ihitte/Uboma',
                'state_id' => '17',
            ],
            [
                'id' => 295,
                'name' => 'Ikeduru',
                'state_id' => '17',
            ],
            [
                'id' => 296,
                'name' => 'Isiala Mbano',
                'state_id' => '17',
            ],
            [
                'id' => 297,
                'name' => 'Isu',
                'state_id' => '17',
            ],
            [
                'id' => 298,
                'name' => 'Mbaitoli',
                'state_id' => '17',
            ],
            [
                'id' => 299,
                'name' => 'Ngor-Okpala',
                'state_id' => '17',
            ],
            [
                'id' => 300,
                'name' => 'Njaba',
                'state_id' => '17',
            ],
            [
                'id' => 301,
                'name' => 'Nwangele',
                'state_id' => '17',
            ],
            [
                'id' => 302,
                'name' => 'Nkwerre',
                'state_id' => '17',
            ],
            [
                'id' => 303,
                'name' => 'Obowo',
                'state_id' => '17',
            ],
            [
                'id' => 304,
                'name' => 'Oguta',
                'state_id' => '17',
            ],
            [
                'id' => 305,
                'name' => 'Ohaji/Egbema',
                'state_id' => '17',
            ],
            [
                'id' => 306,
                'name' => 'Okigwe',
                'state_id' => '17',
            ],
            [
                'id' => 307,
                'name' => 'Orlu',
                'state_id' => '17',
            ],
            [
                'id' => 308,
                'name' => 'Orsu',
                'state_id' => '17',
            ],
            [
                'id' => 309,
                'name' => 'Oru East',
                'state_id' => '17',
            ],
            [
                'id' => 310,
                'name' => 'Oru West',
                'state_id' => '17',
            ],
            [
                'id' => 311,
                'name' => 'Owerri-Municipal',
                'state_id' => '17',
            ],
            [
                'id' => 312,
                'name' => 'Owerri North',
                'state_id' => '17',
            ],
            [
                'id' => 313,
                'name' => 'Owerri West ',
                'state_id' => '17',
            ],
            [
                'id' => 314,
                'name' => 'Auyo',
                'state_id' => '18',
            ],
            [
                'id' => 315,
                'name' => 'Babura',
                'state_id' => '18',
            ],
            [
                'id' => 316,
                'name' => 'Birni Kudu',
                'state_id' => '18',
            ],
            [
                'id' => 317,
                'name' => 'Biriniwa',
                'state_id' => '18',
            ],
            [
                'id' => 318,
                'name' => 'Buji',
                'state_id' => '18',
            ],
            [
                'id' => 319,
                'name' => 'Dutse',
                'state_id' => '18',
            ],
            [
                'id' => 320,
                'name' => 'Gagarawa',
                'state_id' => '18',
            ],
            [
                'id' => 321,
                'name' => 'Garki',
                'state_id' => '18',
            ],
            [
                'id' => 322,
                'name' => 'Gumel',
                'state_id' => '18',
            ],
            [
                'id' => 323,
                'name' => 'Guri',
                'state_id' => '18',
            ],
            [
                'id' => 324,
                'name' => 'Gwaram',
                'state_id' => '18',
            ],
            [
                'id' => 325,
                'name' => 'Gwiwa',
                'state_id' => '18',
            ],
            [
                'id' => 326,
                'name' => 'Hadejia',
                'state_id' => '18',
            ],
            [
                'id' => 327,
                'name' => 'Jahun',
                'state_id' => '18',
            ],
            [
                'id' => 328,
                'name' => 'Kafin Hausa',
                'state_id' => '18',
            ],
            [
                'id' => 329,
                'name' => 'Kaugama Kazaure',
                'state_id' => '18',
            ],
            [
                'id' => 330,
                'name' => 'Kiri Kasamma',
                'state_id' => '18',
            ],
            [
                'id' => 331,
                'name' => 'Kiyawa',
                'state_id' => '18',
            ],
            [
                'id' => 332,
                'name' => 'Maigatari',
                'state_id' => '18',
            ],
            [
                'id' => 333,
                'name' => 'Malam Madori',
                'state_id' => '18',
            ],
            [
                'id' => 334,
                'name' => 'Miga',
                'state_id' => '18',
            ],
            [
                'id' => 335,
                'name' => 'Ringim',
                'state_id' => '18',
            ],
            [
                'id' => 336,
                'name' => 'Roni',
                'state_id' => '18',
            ],
            [
                'id' => 337,
                'name' => 'Sule-Tankarkar',
                'state_id' => '18',
            ],
            [
                'id' => 338,
                'name' => 'Taura ',
                'state_id' => '18',
            ],
            [
                'id' => 339,
                'name' => 'Yankwashi ',
                'state_id' => '18',
            ],
            [
                'id' => 340,
                'name' => 'Birni-Gwari',
                'state_id' => '19',
            ],
            [
                'id' => 341,
                'name' => 'Chikun',
                'state_id' => '19',
            ],
            [
                'id' => 342,
                'name' => 'Giwa',
                'state_id' => '19',
            ],
            [
                'id' => 343,
                'name' => 'Igabi',
                'state_id' => '19',
            ],
            [
                'id' => 344,
                'name' => 'Ikara',
                'state_id' => '19',
            ],
            [
                'id' => 345,
                'name' => 'jaba',
                'state_id' => '19',
            ],
            [
                'id' => 346,
                'name' => 'Jemaa',
                'state_id' => '19',
            ],
            [
                'id' => 347,
                'name' => 'Kachia',
                'state_id' => '19',
            ],
            [
                'id' => 348,
                'name' => 'Kaduna North',
                'state_id' => '19',
            ],
            [
                'id' => 349,
                'name' => 'Kaduna South',
                'state_id' => '19',
            ],
            [
                'id' => 350,
                'name' => 'Kagarko',
                'state_id' => '19',
            ],
            [
                'id' => 351,
                'name' => 'Kajuru',
                'state_id' => '19',
            ],
            [
                'id' => 352,
                'name' => 'Kaura',
                'state_id' => '19',
            ],
            [
                'id' => 353,
                'name' => 'Kauru',
                'state_id' => '19',
            ],
            [
                'id' => 354,
                'name' => 'Kubau',
                'state_id' => '19',
            ],
            [
                'id' => 355,
                'name' => 'Kudan',
                'state_id' => '19',
            ],
            [
                'id' => 356,
                'name' => 'Lere',
                'state_id' => '19',
            ],
            [
                'id' => 357,
                'name' => 'Makarfi',
                'state_id' => '19',
            ],
            [
                'id' => 358,
                'name' => 'Sabon-Gari',
                'state_id' => '19',
            ],
            [
                'id' => 359,
                'name' => 'Sanga',
                'state_id' => '19',
            ],
            [
                'id' => 360,
                'name' => 'Soba',
                'state_id' => '19',
            ],
            [
                'id' => 361,
                'name' => 'Zango-Kataf',
                'state_id' => '19',
            ],
            [
                'id' => 362,
                'name' => 'Zaria',
                'state_id' => '19',
            ],
            [
                'id' => 363,
                'name' => 'Ajingi',
                'state_id' => '20',
            ],
            [
                'id' => 364,
                'name' => 'Albasu',
                'state_id' => '20',
            ],
            [
                'id' => 365,
                'name' => 'Bagwai',
                'state_id' => '20',
            ],
            [
                'id' => 366,
                'name' => 'Bebeji',
                'state_id' => '20',
            ],
            [
                'id' => 367,
                'name' => 'Bichi',
                'state_id' => '20',
            ],
            [
                'id' => 368,
                'name' => 'Bunkure',
                'state_id' => '20',
            ],
            [
                'id' => 369,
                'name' => 'Dala',
                'state_id' => '20',
            ],
            [
                'id' => 370,
                'name' => 'Dambatta',
                'state_id' => '20',
            ],
            [
                'id' => 371,
                'name' => 'Dawakin Kudu',
                'state_id' => '20',
            ],
            [
                'id' => 373,
                'name' => 'Dawakin Tofa',
                'state_id' => '20',
            ],
            [
                'id' => 374,
                'name' => 'Doguwa',
                'state_id' => '20',
            ],
            [
                'id' => 375,
                'name' => 'Fagge',
                'state_id' => '20',
            ],
            [
                'id' => 376,
                'name' => 'Gabasawa',
                'state_id' => '20',
            ],
            [
                'id' => 377,
                'name' => 'Garko',
                'state_id' => '20',
            ],
            [
                'id' => 378,
                'name' => 'Garum',
                'state_id' => '20',
            ],
            [
                'id' => 379,
                'name' => 'Mallam',
                'state_id' => '20',
            ],
            [
                'id' => 380,
                'name' => 'Gaya',
                'state_id' => '20',
            ],
            [
                'id' => 381,
                'name' => 'Gezawa',
                'state_id' => '20',
            ],
            [
                'id' => 382,
                'name' => 'Gwale',
                'state_id' => '20',
            ],
            [
                'id' => 383,
                'name' => 'Gwarzo',
                'state_id' => '20',
            ],
            [
                'id' => 384,
                'name' => 'Kabo',
                'state_id' => '20',
            ],
            [
                'id' => 385,
                'name' => 'Kano Municipal',
                'state_id' => '20',
            ],
            [
                'id' => 386,
                'name' => 'Karaye',
                'state_id' => '20',
            ],
            [
                'id' => 387,
                'name' => 'Kibiya',
                'state_id' => '20',
            ],
            [
                'id' => 388,
                'name' => 'Kiru',
                'state_id' => '20',
            ],
            [
                'id' => 389,
                'name' => 'kumbotso',
                'state_id' => '20',
            ],
            [
                'id' => 390,
                'name' => 'Kunchi',
                'state_id' => '20',
            ],
            [
                'id' => 391,
                'name' => 'Kura',
                'state_id' => '20',
            ],
            [
                'id' => 392,
                'name' => 'Madobi',
                'state_id' => '20',
            ],
            [
                'id' => 393,
                'name' => 'Makoda',
                'state_id' => '20',
            ],
            [
                'id' => 394,
                'name' => 'Minjibir',
                'state_id' => '20',
            ],
            [
                'id' => 395,
                'name' => 'Nasarawa',
                'state_id' => '20',
            ],
            [
                'id' => 396,
                'name' => 'Rano',
                'state_id' => '20',
            ],
            [
                'id' => 397,
                'name' => 'Rimin Gado',
                'state_id' => '20',
            ],
            [
                'id' => 398,
                'name' => 'Rogo',
                'state_id' => '20',
            ],
            [
                'id' => 399,
                'name' => 'Shanono',
                'state_id' => '20',
            ],
            [
                'id' => 400,
                'name' => 'Sumaila',
                'state_id' => '20',
            ],
            [
                'id' => 401,
                'name' => 'Takali',
                'state_id' => '20',
            ],
            [
                'id' => 402,
                'name' => 'Tarauni',
                'state_id' => '20',
            ],
            [
                'id' => 403,
                'name' => 'Tofa',
                'state_id' => '20',
            ],
            [
                'id' => 404,
                'name' => 'Tsanyawa',
                'state_id' => '20',
            ],
            [
                'id' => 405,
                'name' => 'Tudun Wada',
                'state_id' => '20',
            ],
            [
                'id' => 406,
                'name' => 'Ungogo',
                'state_id' => '20',
            ],
            [
                'id' => 407,
                'name' => 'Warawa',
                'state_id' => '20',
            ],
            [
                'id' => 408,
                'name' => 'Wudil',
                'state_id' => '20',
            ],
            [
                'id' => 409,
                'name' => 'Bakori',
                'state_id' => '21',
            ],
            [
                'id' => 410,
                'name' => 'Batagarawa',
                'state_id' => '21',
            ],
            [
                'id' => 411,
                'name' => 'Batsari',
                'state_id' => '21',
            ],
            [
                'id' => 412,
                'name' => 'Baure',
                'state_id' => '21',
            ],
            [
                'id' => 413,
                'name' => 'Bindawa',
                'state_id' => '21',
            ],
            [
                'id' => 414,
                'name' => 'Charanchi',
                'state_id' => '21',
            ],
            [
                'id' => 415,
                'name' => 'Dandume',
                'state_id' => '21',
            ],
            [
                'id' => 416,
                'name' => 'Danja',
                'state_id' => '21',
            ],
            [
                'id' => 417,
                'name' => 'Dan Musa',
                'state_id' => '21',
            ],
            [
                'id' => 418,
                'name' => 'Daura',
                'state_id' => '21',
            ],
            [
                'id' => 419,
                'name' => 'Dutsi',
                'state_id' => '21',
            ],
            [
                'id' => 420,
                'name' => 'Dutsin-Ma',
                'state_id' => '21',
            ],
            [
                'id' => 421,
                'name' => 'Faskari',
                'state_id' => '21',
            ],
            [
                'id' => 422,
                'name' => 'Funtua',
                'state_id' => '21',
            ],
            [
                'id' => 423,
                'name' => 'Ingawa',
                'state_id' => '21',
            ],
            [
                'id' => 424,
                'name' => 'Jibia',
                'state_id' => '21',
            ],
            [
                'id' => 425,
                'name' => 'Kafur',
                'state_id' => '21',
            ],
            [
                'id' => 426,
                'name' => 'Kaita',
                'state_id' => '21',
            ],
            [
                'id' => 427,
                'name' => 'Kankara',
                'state_id' => '21',
            ],
            [
                'id' => 428,
                'name' => 'Kankia',
                'state_id' => '21',
            ],
            [
                'id' => 429,
                'name' => 'Katsina',
                'state_id' => '21',
            ],
            [
                'id' => 430,
                'name' => 'Kurfi',
                'state_id' => '21',
            ],
            [
                'id' => 431,
                'name' => 'Kusada',
                'state_id' => '21',
            ],
            [
                'id' => 432,
                'name' => 'Mai Adua',
                'state_id' => '21',
            ],
            [
                'id' => 433,
                'name' => 'Malumfashi',
                'state_id' => '21',
            ],
            [
                'id' => 434,
                'name' => 'Mani',
                'state_id' => '21',
            ],
            [
                'id' => 435,
                'name' => 'Mashi',
                'state_id' => '21',
            ],
            [
                'id' => 436,
                'name' => 'Matazuu',
                'state_id' => '21',
            ],
            [
                'id' => 437,
                'name' => 'Musawa',
                'state_id' => '21',
            ],
            [
                'id' => 438,
                'name' => 'Rimi',
                'state_id' => '21',
            ],
            [
                'id' => 439,
                'name' => 'Sabuwa',
                'state_id' => '21',
            ],
            [
                'id' => 440,
                'name' => 'Safana',
                'state_id' => '21',
            ],
            [
                'id' => 441,
                'name' => 'Sandamu',
                'state_id' => '21',
            ],
            [
                'id' => 442,
                'name' => 'Zango',
                'state_id' => '21',
            ],
            [
                'id' => 443,
                'name' => 'Aleiro',
                'state_id' => '22',
            ],
            [
                'id' => 444,
                'name' => 'Arewa-Dandi',
                'state_id' => '22',
            ],
            [
                'id' => 445,
                'name' => 'Argungu',
                'state_id' => '22',
            ],
            [
                'id' => 446,
                'name' => 'Augie',
                'state_id' => '22',
            ],
            [
                'id' => 447,
                'name' => 'Bagudo',
                'state_id' => '22',
            ],
            [
                'id' => 448,
                'name' => 'Birnin Kebbi',
                'state_id' => '22',
            ],
            [
                'id' => 449,
                'name' => 'Bunza',
                'state_id' => '22',
            ],
            [
                'id' => 450,
                'name' => 'Dandi',
                'state_id' => '22',
            ],
            [
                'id' => 451,
                'name' => 'Fakai',
                'state_id' => '22',
            ],
            [
                'id' => 452,
                'name' => 'Gwandu',
                'state_id' => '22',
            ],
            [
                'id' => 453,
                'name' => 'Jega',
                'state_id' => '22',
            ],
            [
                'id' => 454,
                'name' => 'Kalgo',
                'state_id' => '22',
            ],
            [
                'id' => 455,
                'name' => 'Koko/Besse',
                'state_id' => '22',
            ],
            [
                'id' => 456,
                'name' => 'Maiyama',
                'state_id' => '22',
            ],
            [
                'id' => 457,
                'name' => 'Ngaski',
                'state_id' => '22',
            ],
            [
                'id' => 458,
                'name' => 'Sakaba',
                'state_id' => '22',
            ],
            [
                'id' => 459,
                'name' => 'Shanga',
                'state_id' => '22',
            ],
            [
                'id' => 460,
                'name' => 'Suru',
                'state_id' => '22',
            ],
            [
                'id' => 461,
                'name' => 'Wasagu/Danko',
                'state_id' => '22',
            ],
            [
                'id' => 462,
                'name' => 'Yauri',
                'state_id' => '22',
            ],
            [
                'id' => 463,
                'name' => 'Zuru',
                'state_id' => '22',
            ],
            [
                'id' => 464,
                'name' => 'Adavi',
                'state_id' => '23',
            ],
            [
                'id' => 465,
                'name' => 'Ajaokuta',
                'state_id' => '23',
            ],
            [
                'id' => 466,
                'name' => 'Ankpa',
                'state_id' => '23',
            ],
            [
                'id' => 467,
                'name' => 'Bassa',
                'state_id' => '23',
            ],
            [
                'id' => 468,
                'name' => 'Dekina',
                'state_id' => '23',
            ],
            [
                'id' => 469,
                'name' => 'Ibaji',
                'state_id' => '23',
            ],
            [
                'id' => 470,
                'name' => 'Idah',
                'state_id' => '23',
            ],
            [
                'id' => 471,
                'name' => 'Igalamela-Odolu',
                'state_id' => '23',
            ],
            [
                'id' => 472,
                'name' => 'Ijumu',
                'state_id' => '23',
            ],
            [
                'id' => 473,
                'name' => 'Kabba/Bunu',
                'state_id' => '23',
            ],
            [
                'id' => 474,
                'name' => 'Kogi',
                'state_id' => '23',
            ],
            [
                'id' => 475,
                'name' => 'Lokoja',
                'state_id' => '23',
            ],
            [
                'id' => 476,
                'name' => 'Mopa-Muro',
                'state_id' => '23',
            ],
            [
                'id' => 477,
                'name' => 'Ofu',
                'state_id' => '23',
            ],
            [
                'id' => 478,
                'name' => 'Ogori/Mangongo',
                'state_id' => '23',
            ],
            [
                'id' => 479,
                'name' => 'Okehi',
                'state_id' => '23',
            ],
            [
                'id' => 480,
                'name' => 'Okene',
                'state_id' => '23',
            ],
            [
                'id' => 481,
                'name' => 'Olamabolo',
                'state_id' => '23',
            ],
            [
                'id' => 482,
                'name' => 'Omala',
                'state_id' => '23',
            ],
            [
                'id' => 483,
                'name' => 'Yagba East',
                'state_id' => '23',
            ],
            [
                'id' => 484,
                'name' => 'Yagba West',
                'state_id' => '23',
            ],
            [
                'id' => 485,
                'name' => 'Asa',
                'state_id' => '24',
            ],
            [
                'id' => 486,
                'name' => 'Baruten',
                'state_id' => '24',
            ],
            [
                'id' => 487,
                'name' => 'Edu',
                'state_id' => '24',
            ],
            [
                'id' => 488,
                'name' => 'Ekiti',
                'state_id' => '24',
            ],
            [
                'id' => 489,
                'name' => 'Ifelodun',
                'state_id' => '24',
            ],
            [
                'id' => 490,
                'name' => 'Ilorin East',
                'state_id' => '24',
            ],
            [
                'id' => 491,
                'name' => 'Ilorin West',
                'state_id' => '24',
            ],
            [
                'id' => 492,
                'name' => 'Irepodun',
                'state_id' => '24',
            ],
            [
                'id' => 493,
                'name' => 'Isin',
                'state_id' => '24',
            ],
            [
                'id' => 494,
                'name' => 'Kaiama',
                'state_id' => '24',
            ],
            [
                'id' => 495,
                'name' => 'Moro',
                'state_id' => '24',
            ],
            [
                'id' => 496,
                'name' => 'Offa',
                'state_id' => '24',
            ],
            [
                'id' => 497,
                'name' => 'Oke-Ero',
                'state_id' => '24',
            ],
            [
                'id' => 498,
                'name' => 'Oyun',
                'state_id' => '24',
            ],
            [
                'id' => 499,
                'name' => 'Pategi',
                'state_id' => '24',
            ],
            [
                'id' => 500,
                'name' => 'Agege',
                'state_id' => '25',
            ],
            [
                'id' => 501,
                'name' => 'Ajeromi-Ifelodun',
                'state_id' => '25',
            ],
            [
                'id' => 502,
                'name' => 'Alimosho',
                'state_id' => '25',
            ],
            [
                'id' => 503,
                'name' => 'Amuwo-Odofin',
                'state_id' => '25',
            ],
            [
                'id' => 504,
                'name' => 'Apapa',
                'state_id' => '25',
            ],
            [
                'id' => 505,
                'name' => 'Badagry',
                'state_id' => '25',
            ],
            [
                'id' => 506,
                'name' => 'Epe',
                'state_id' => '25',
            ],
            [
                'id' => 507,
                'name' => 'Eti-Osa',
                'state_id' => '25',
            ],
            [
                'id' => 508,
                'name' => 'Ibeju/Lekki',
                'state_id' => '25',
            ],
            [
                'id' => 509,
                'name' => 'Ifako-Ijaye',
                'state_id' => '25',
            ],
            [
                'id' => 510,
                'name' => 'Ikeja',
                'state_id' => '25',
            ],
            [
                'id' => 511,
                'name' => 'Ikorodu',
                'state_id' => '25',
            ],
            [
                'id' => 512,
                'name' => 'Kosofe',
                'state_id' => '25',
            ],
            [
                'id' => 513,
                'name' => 'Lagos Island',
                'state_id' => '25',
            ],
            [
                'id' => 514,
                'name' => 'Lagos Mainland',
                'state_id' => '25',
            ],
            [
                'id' => 515,
                'name' => 'Mushin',
                'state_id' => '25',
            ],
            [
                'id' => 516,
                'name' => 'Ojo',
                'state_id' => '25',
            ],
            [
                'id' => 517,
                'name' => 'Oshodi-Isolo',
                'state_id' => '25',
            ],
            [
                'id' => 518,
                'name' => 'Shomolu',
                'state_id' => '25',
            ],
            [
                'id' => 519,
                'name' => 'Surulere',
                'state_id' => '25',
            ],
            [
                'id' => 520,
                'name' => 'Akwanga',
                'state_id' => '26',
            ],
            [
                'id' => 521,
                'name' => 'Awe',
                'state_id' => '26',
            ],
            [
                'id' => 522,
                'name' => 'Doma',
                'state_id' => '26',
            ],
            [
                'id' => 523,
                'name' => 'Karu',
                'state_id' => '26',
            ],
            [
                'id' => 524,
                'name' => 'Keana',
                'state_id' => '26',
            ],
            [
                'id' => 525,
                'name' => 'Keffi',
                'state_id' => '26',
            ],
            [
                'id' => 526,
                'name' => 'Kokona',
                'state_id' => '26',
            ],
            [
                'id' => 527,
                'name' => 'Lafia',
                'state_id' => '26',
            ],
            [
                'id' => 528,
                'name' => 'Nasarawa',
                'state_id' => '26',
            ],
            [
                'id' => 529,
                'name' => 'Nasarawa-Eggon',
                'state_id' => '26',
            ],
            [
                'id' => 530,
                'name' => 'Obi',
                'state_id' => '26',
            ],
            [
                'id' => 531,
                'name' => 'Toto',
                'state_id' => '26',
            ],
            [
                'id' => 532,
                'name' => 'Wamba',
                'state_id' => '26',
            ],
            [
                'id' => 533,
                'name' => 'Agaie',
                'state_id' => '27',
            ],
            [
                'id' => 534,
                'name' => 'Agwara',
                'state_id' => '27',
            ],
            [
                'id' => 535,
                'name' => 'Bida',
                'state_id' => '27',
            ],
            [
                'id' => 536,
                'name' => 'Borgu',
                'state_id' => '27',
            ],
            [
                'id' => 537,
                'name' => 'Bosso',
                'state_id' => '27',
            ],
            [
                'id' => 538,
                'name' => 'Chanchaga',
                'state_id' => '27',
            ],
            [
                'id' => 539,
                'name' => 'Edati',
                'state_id' => '27',
            ],
            [
                'id' => 540,
                'name' => 'Gbako',
                'state_id' => '27',
            ],
            [
                'id' => 541,
                'name' => 'Gurara',
                'state_id' => '27',
            ],
            [
                'id' => 542,
                'name' => 'Katcha',
                'state_id' => '27',
            ],
            [
                'id' => 543,
                'name' => 'Kontagora',
                'state_id' => '27',
            ],
            [
                'id' => 544,
                'name' => 'Lapai',
                'state_id' => '27',
            ],
            [
                'id' => 545,
                'name' => 'Lavun',
                'state_id' => '27',
            ],
            [
                'id' => 546,
                'name' => 'Magama',
                'state_id' => '27',
            ],
            [
                'id' => 547,
                'name' => 'Mariga',
                'state_id' => '27',
            ],
            [
                'id' => 548,
                'name' => 'Mashegu',
                'state_id' => '27',
            ],
            [
                'id' => 549,
                'name' => 'Mokwa',
                'state_id' => '27',
            ],
            [
                'id' => 550,
                'name' => 'Muya',
                'state_id' => '27',
            ],
            [
                'id' => 551,
                'name' => 'Pailoro',
                'state_id' => '27',
            ],
            [
                'id' => 552,
                'name' => 'Rafi',
                'state_id' => '27',
            ],
            [
                'id' => 553,
                'name' => 'Rijau',
                'state_id' => '27',
            ],
            [
                'id' => 554,
                'name' => 'Shiroro',
                'state_id' => '27',
            ],
            [
                'id' => 555,
                'name' => 'Suleja',
                'state_id' => '27',
            ],
            [
                'id' => 556,
                'name' => 'Tafa',
                'state_id' => '27',
            ],
            [
                'id' => 557,
                'name' => 'Wushishi',
                'state_id' => '27',
            ],
            [
                'id' => 558,
                'name' => 'Abeokuta North',
                'state_id' => '28',
            ],
            [
                'id' => 559,
                'name' => 'Abeokuta South',
                'state_id' => '28',
            ],
            [
                'id' => 560,
                'name' => 'Ado-Odo/Ota',
                'state_id' => '28',
            ],
            [
                'id' => 561,
                'name' => 'Egbado North',
                'state_id' => '28',
            ],
            [
                'id' => 562,
                'name' => 'Egbado South',
                'state_id' => '28',
            ],
            [
                'id' => 563,
                'name' => 'Ewekoro',
                'state_id' => '28',
            ],
            [
                'id' => 564,
                'name' => 'Ifo',
                'state_id' => '28',
            ],
            [
                'id' => 565,
                'name' => 'Ijebu East',
                'state_id' => '28',
            ],
            [
                'id' => 566,
                'name' => 'Ijebu North',
                'state_id' => '28',
            ],
            [
                'id' => 567,
                'name' => 'Ijebu North East',
                'state_id' => '28',
            ],
            [
                'id' => 568,
                'name' => 'Ijebu Ode',
                'state_id' => '28',
            ],
            [
                'id' => 569,
                'name' => 'Ikenne',
                'state_id' => '28',
            ],
            [
                'id' => 570,
                'name' => 'Imeko-Afon',
                'state_id' => '28',
            ],
            [
                'id' => 571,
                'name' => 'Ipokia',
                'state_id' => '28',
            ],
            [
                'id' => 572,
                'name' => 'Obafemi-Owode',
                'state_id' => '28',
            ],
            [
                'id' => 573,
                'name' => 'Ogun Waterside',
                'state_id' => '28',
            ],
            [
                'id' => 574,
                'name' => 'Odeda',
                'state_id' => '28',
            ],
            [
                'id' => 575,
                'name' => 'Odogbolu',
                'state_id' => '28',
            ],
            [
                'id' => 576,
                'name' => 'Remo North',
                'state_id' => '28',
            ],
            [
                'id' => 577,
                'name' => 'Shagamu',
                'state_id' => '28',
            ],
            [
                'id' => 578,
                'name' => 'Akoko North East',
                'state_id' => '29',
            ],
            [
                'id' => 579,
                'name' => 'Akoko North West',
                'state_id' => '29',
            ],
            [
                'id' => 580,
                'name' => 'Akoko South Akure East',
                'state_id' => '29',
            ],
            [
                'id' => 581,
                'name' => 'Akoko South West',
                'state_id' => '29',
            ],
            [
                'id' => 582,
                'name' => 'Akure North',
                'state_id' => '29',
            ],
            [
                'id' => 583,
                'name' => 'Akure South',
                'state_id' => '29',
            ],
            [
                'id' => 584,
                'name' => 'Ese-Odo',
                'state_id' => '29',
            ],
            [
                'id' => 585,
                'name' => 'Idanre',
                'state_id' => '29',
            ],
            [
                'id' => 586,
                'name' => 'Ifedore',
                'state_id' => '29',
            ],
            [
                'id' => 587,
                'name' => 'Ilaje',
                'state_id' => '29',
            ],
            [
                'id' => 588,
                'name' => 'Ile-Oluji',
                'state_id' => '29',
            ],
            [
                'id' => 589,
                'name' => 'Okeigbo',
                'state_id' => '29',
            ],
            [
                'id' => 590,
                'name' => 'Irele',
                'state_id' => '29',
            ],
            [
                'id' => 591,
                'name' => 'Odigbo',
                'state_id' => '29',
            ],
            [
                'id' => 592,
                'name' => 'Okitipupa',
                'state_id' => '29',
            ],
            [
                'id' => 593,
                'name' => 'Ondo East',
                'state_id' => '29',
            ],
            [
                'id' => 594,
                'name' => 'Ondo West',
                'state_id' => '29',
            ],
            [
                'id' => 595,
                'name' => 'Ose',
                'state_id' => '29',
            ],
            [
                'id' => 596,
                'name' => 'Owo ',
                'state_id' => '29',
            ],
            [
                'id' => 597,
                'name' => 'Aiyedade',
                'state_id' => '30',
            ],
            [
                'id' => 598,
                'name' => 'Aiyedire',
                'state_id' => '30',
            ],
            [
                'id' => 599,
                'name' => 'Atakumosa East',
                'state_id' => '30',
            ],
            [
                'id' => 600,
                'name' => 'Atakumosa West',
                'state_id' => '30',
            ],
            [
                'id' => 601,
                'name' => 'Boluwaduro',
                'state_id' => '30',
            ],
            [
                'id' => 602,
                'name' => 'Boripe',
                'state_id' => '30',
            ],
            [
                'id' => 603,
                'name' => 'Ede North',
                'state_id' => '30',
            ],
            [
                'id' => 604,
                'name' => 'Ede South',
                'state_id' => '30',
            ],
            [
                'id' => 605,
                'name' => 'Egbedore',
                'state_id' => '30',
            ],
            [
                'id' => 606,
                'name' => 'Ejigbo',
                'state_id' => '30',
            ],
            [
                'id' => 607,
                'name' => 'Ife Central',
                'state_id' => '30',
            ],
            [
                'id' => 608,
                'name' => 'Ife East',
                'state_id' => '30',
            ],
            [
                'id' => 609,
                'name' => 'Ife North',
                'state_id' => '30',
            ],
            [
                'id' => 610,
                'name' => 'Ife South',
                'state_id' => '30',
            ],
            [
                'id' => 611,
                'name' => 'Ifedayo',
                'state_id' => '30',
            ],
            [
                'id' => 612,
                'name' => 'Ifelodun',
                'state_id' => '30',
            ],
            [
                'id' => 613,
                'name' => 'Ila',
                'state_id' => '30',
            ],
            [
                'id' => 614,
                'name' => 'Ilesha East',
                'state_id' => '30',
            ],
            [
                'id' => 615,
                'name' => 'Ilesha West',
                'state_id' => '30',
            ],
            [
                'id' => 616,
                'name' => 'Irepodun',
                'state_id' => '30',
            ],
            [
                'id' => 617,
                'name' => 'Irewole',
                'state_id' => '30',
            ],
            [
                'id' => 618,
                'name' => 'Isokan',
                'state_id' => '30',
            ],
            [
                'id' => 619,
                'name' => 'Iwo',
                'state_id' => '30',
            ],
            [
                'id' => 620,
                'name' => 'Obokun',
                'state_id' => '30',
            ],
            [
                'id' => 621,
                'name' => 'Odo-Otin',
                'state_id' => '30',
            ],
            [
                'id' => 622,
                'name' => 'Ola-Oluwa',
                'state_id' => '30',
            ],
            [
                'id' => 623,
                'name' => 'Olorunda',
                'state_id' => '30',
            ],
            [
                'id' => 624,
                'name' => 'Oriade',
                'state_id' => '30',
            ],
            [
                'id' => 625,
                'name' => 'Orolu',
                'state_id' => '30',
            ],
            [
                'id' => 626,
                'name' => 'Osogbo',
                'state_id' => '30',
            ],
            [
                'id' => 627,
                'name' => 'Afijio',
                'state_id' => '31',
            ],
            [
                'id' => 628,
                'name' => 'Akinyele',
                'state_id' => '31',
            ],
            [
                'id' => 629,
                'name' => 'Atiba',
                'state_id' => '31',
            ],
            [
                'id' => 630,
                'name' => 'Atigbo',
                'state_id' => '31',
            ],
            [
                'id' => 631,
                'name' => 'Egbeda',
                'state_id' => '31',
            ],
            [
                'id' => 632,
                'name' => 'Ibadan Central',
                'state_id' => '31',
            ],
            [
                'id' => 633,
                'name' => 'Ibadan North',
                'state_id' => '31',
            ],
            [
                'id' => 634,
                'name' => 'Ibadan North West',
                'state_id' => '31',
            ],
            [
                'id' => 635,
                'name' => 'Ibadan South East',
                'state_id' => '31',
            ],
            [
                'id' => 636,
                'name' => 'Ibadan South West',
                'state_id' => '31',
            ],
            [
                'id' => 637,
                'name' => 'Ibarapa Central',
                'state_id' => '31',
            ],
            [
                'id' => 638,
                'name' => 'Ibarapa East',
                'state_id' => '31',
            ],
            [
                'id' => 639,
                'name' => 'Ibarapa North',
                'state_id' => '31',
            ],
            [
                'id' => 640,
                'name' => 'Ido',
                'state_id' => '31',
            ],

            [
                'id' => 641,
                'name' => 'Irepo',
                'state_id' => '31',
            ],
            [
                'id' => 642,
                'name' => 'Iseyin',
                'state_id' => '31',
            ],
            [
                'id' => 643,
                'name' => 'Itesiwaju',
                'state_id' => '31',
            ],[
                'id' => 644,
                'name' => 'Iwajowa',
                'state_id' => '31',
            ],
            [
                'id' => 645,
                'name' => 'Kajola',
                'state_id' => '31',
            ],
            [
                'id' => 646,
                'name' => 'Lagelu Ogbomosho North',
                'state_id' => '31',
            ],
            [
                'id' => 647,
                'name' => 'Ogbmosho South',
                'state_id' => '31',
            ],
            [
                'id' => 648,
                'name' => 'Ogo Oluwa',
                'state_id' => '31',
            ],
            [
                'id' => 649,
                'name' => 'Olorunsogo',
                'state_id' => '31',
            ],
            [
                'id' => 650,
                'name' => 'Oluyole',
                'state_id' => '31',
            ],
            [
                'id' => 651,
                'name' => 'Ona-Ara',
                'state_id' => '31',
            ],
            [
                'id' => 652,
                'name' => 'Orelope',
                'state_id' => '31',
            ],
            [
                'id' => 653,
                'name' => 'Ori Ire',
                'state_id' => '31',
            ],
            [
                'id' => 654,
                'name' => 'Oyo East',
                'state_id' => '31',
            ],
            [
                'id' => 655,
                'name' => 'Oyo West',
                'state_id' => '31',
            ],
            [
                'id' => 656,
                'name' => 'Saki East',
                'state_id' => '31',
            ],
            [
                'id' => 657,
                'name' => 'Saki West',
                'state_id' => '31',
            ],
            [
                'id' => 658,
                'name' => 'Surulere',
                'state_id' => '31',
            ],
            [
                'id' => 659,
                'name' => 'Barikin Ladi',
                'state_id' => '32',
            ],[
                'id' => 660,
                'name' => 'Bassa',
                'state_id' => '32',
            ],
            [
                'id' => 661,
                'name' => 'Bokkos',
                'state_id' => '32',
            ],
            [
                'id' => 662,
                'name' => 'Jos East',
                'state_id' => '32',
            ],
            [
                'id' => 663,
                'name' => 'Jos North',
                'state_id' => '32',
            ],
            [
                'id' => 664,
                'name' => 'Jos South',
                'state_id' => '32',
            ],
            [
                'id' => 665,
                'name' => 'Kanam',
                'state_id' => '32',
            ],
            [
                'id' => 666,
                'name' => 'Kanke',
                'state_id' => '32',
            ],
            [
                'id' => 667,
                'name' => 'Langtang North',
                'state_id' => '32',
            ],
            [
                'id' => 668,
                'name' => 'Langtang South',
                'state_id' => '32',
            ],
            [
                'id' => 669,
                'name' => 'Mangu',
                'state_id' => '32',
            ],
            [
                'id' => 670,
                'name' => 'Mikang',
                'state_id' => '32',
            ],
            [
                'id' => 671,
                'name' => 'Pankshin',
                'state_id' => '32',
            ],[
                'id' => 672,
                'name' => 'Qua an Pan',
                'state_id' => '32',
            ],

            [
                'id' => 673,
                'name' => 'Riyom',
                'state_id' => '32',
            ],
            [
                'id' => 674,
                'name' => 'Shendam',
                'state_id' => '32',
            ],
            [
                'id' => 675,
                'name' => 'Wase',
                'state_id' => '32',
            ],
            [
                'id' => 676,
                'name' => 'Abua/Odual',
                'state_id' => '33',
            ],
            [
                'id' => 677,
                'name' => 'Ahoada East',
                'state_id' => '33',
            ],
            [
                'id' => 678,
                'name' => 'Ahoada West',
                'state_id' => '33',
            ],
            [
                'id' => 679,
                'name' => 'Akuku Toru',
                'state_id' => '33',
            ],
            [
                'id' => 680,
                'name' => 'Andoni',
                'state_id' => '33',
            ],
            [
                'id' => 681,
                'name' => 'Asari-Toru',
                'state_id' => '33',
            ],
            [
                'id' => 682,
                'name' => 'Bonny',
                'state_id' => '33',
            ],
            [
                'id' => 683,
                'name' => 'Degema',
                'state_id' => '33',
            ],
            [
                'id' => 684,
                'name' => 'Emohua',
                'state_id' => '33',
            ],
            [
                'id' => 685,
                'name' => 'Eleme',
                'state_id' => '33',
            ],
            [
                'id' => 686,
                'name' => 'Etche',
                'state_id' => '33',
            ],
            [
                'id' => 687,
                'name' => 'Gokana',
                'state_id' => '33',
            ],
            [
                'id' => 688,
                'name' => 'Ikwerre',
                'state_id' => '33',
            ],
            [
                'id' => 689,
                'name' => 'Khana',
                'state_id' => '33',
            ],
            [
                'id' => 690,
                'name' => 'Obia/Akpor',
                'state_id' => '33',
            ],
            [
                'id' => 691,
                'name' => 'Ogba/Egbema/Ndoni',
                'state_id' => '33',
            ],
            [
                'id' => 692,
                'name' => 'Ogu/Bolo',
                'state_id' => '33',
            ],
            [
                'id' => 693,
                'name' => 'Okrika',
                'state_id' => '33',
            ],
            [
                'id' => 694,
                'name' => 'Omumma',
                'state_id' => '33',
            ],
            [
                'id' => 695,
                'name' => 'Opobo/Nkoro',
                'state_id' => '33',
            ],
            [
                'id' => 696,
                'name' => 'Oyigbo',
                'state_id' => '33',
            ],
            [
                'id' => 697,
                'name' => 'Port-Harcourt',
                'state_id' => '33',
            ],
            [
                'id' => 698,
                'name' => 'Tai ',
                'state_id' => '33',
            ],
            [
                'id' => 699,
                'name' => 'Binji',
                'state_id' => '34',
            ],
            [
                'id' => 700,
                'name' => 'Bodinga',
                'state_id' => '34',
            ],
            [
                'id' => 701,
                'name' => 'Dange-shnsi',
                'state_id' => '34',
            ],
            [
                'id' => 702,
                'name' => 'Gada',
                'state_id' => '34',
            ],
            [
                'id' => 703,
                'name' => 'Goronyo',
                'state_id' => '34',
            ],
            [
                'id' => 704,
                'name' => 'Gudu',
                'state_id' => '34',
            ],
            [
                'id' => 705,
                'name' => 'Gawabawa',
                'state_id' => '34',
            ],
            [
                'id' => 706,
                'name' => 'Illela',
                'state_id' => '34',
            ],
            [
                'id' => 707,
                'name' => 'Isa',
                'state_id' => '34',
            ],
            [
                'id' => 708,
                'name' => 'Kware',
                'state_id' => '34',
            ],
            [
                'id' => 709,
                'name' => 'kebbe',
                'state_id' => '34',
            ],
            [
                'id' => 710,
                'name' => 'Rabah',
                'state_id' => '34',
            ],
            [
                'id' => 711,
                'name' => 'Sabon birni',
                'state_id' => '34',
            ],
            [
                'id' => 712,
                'name' => 'Shagari',
                'state_id' => '34',
            ],
            [
                'id' => 713,
                'name' => 'Silame',
                'state_id' => '34',
            ],
            [
                'id' => 714,
                'name' => 'Sokoto North',
                'state_id' => '34',
            ],
            [
                'id' => 715,
                'name' => 'Sokoto South',
                'state_id' => '34',
            ],
            [
                'id' => 716,
                'name' => 'Tambuwal',
                'state_id' => '34',
            ],
            [
                'id' => 717,
                'name' => 'Tqngaza',
                'state_id' => '34',
            ],
            [
                'id' => 718,
                'name' => 'Tureta',
                'state_id' => '34',
            ],
            [
                'id' => 719,
                'name' => 'Wamako',
                'state_id' => '34',
            ],
            [
                'id' => 720,
                'name' => 'Wurno',
                'state_id' => '34',
            ],
            [
                'id' => 721,
                'name' => 'Yabo',
                'state_id' => '34',
            ],
            [
                'id' => 722,
                'name' => 'Ardo-kola',
                'state_id' => '35',
            ],
            [
                'id' => 723,
                'name' => 'Bali',
                'state_id' => '35',
            ],
            [
                'id' => 724,
                'name' => 'Donga',
                'state_id' => '35',
            ],
            [
                'id' => 725,
                'name' => 'Gashaka',
                'state_id' => '35',
            ],
            [
                'id' => 726,
                'name' => 'Cassol',
                'state_id' => '35',
            ],
            [
                'id' => 727,
                'name' => 'Ibi',
                'state_id' => '35',
            ],[
                'id' => 728,
                'name' => 'Jalingo',
                'state_id' => '35',
            ],

            [
                'id' => 729,
                'name' => 'Karin-Lamido',
                'state_id' => '35',
            ],
            [
                'id' => 730,
                'name' => 'Kurmi',
                'state_id' => '35',
            ],
            [
                'id' => 731,
                'name' => 'Lau',
                'state_id' => '35',
            ],
            [
                'id' => 732,
                'name' => 'Sardauna',
                'state_id' => '35',
            ],
            [
                'id' => 733,
                'name' => 'Takum',
                'state_id' => '35',
            ],
            [
                'id' => 734,
                'name' => 'Ussa',
                'state_id' => '35',
            ],[
                'id' => 735,
                'name' => 'Wukari',
                'state_id' => '35',
            ],

            [
                'id' => 736,
                'name' => 'Yorro',
                'state_id' => '35',
            ],
            [
                'id' => 737,
                'name' => 'Zing',
                'state_id' => '35',
            ],
            [
                'id' => 738,
                'name' => 'Bade',
                'state_id' => '36',
            ],
            [
                'id' => 739,
                'name' => 'Bursari',
                'state_id' => '36',
            ],
            [
                'id' => 740,
                'name' => 'Damaturu',
                'state_id' => '36',
            ],
            [
                'id' => 741,
                'name' => 'Fika',
                'state_id' => '36',
            ],
            [
                'id' => 742,
                'name' => 'Fune',
                'state_id' => '36',
            ],
            [
                'id' => 743,
                'name' => 'Geidam',
                'state_id' => '36',
            ],
            [
                'id' => 744,
                'name' => 'Gujba',
                'state_id' => '36',
            ],
            [
                'id' => 745,
                'name' => 'Gulani',
                'state_id' => '36',
            ],
            [
                'id' => 746,
                'name' => 'Jakusko',
                'state_id' => '36',
            ],
            [
                'id' => 747,
                'name' => 'Karasuwa',
                'state_id' => '36',
            ],
            [
                'id' => 748,
                'name' => 'Karawa',
                'state_id' => '36',
            ],
            [
                'id' => 749,
                'name' => 'Machina',
                'state_id' => '36',
            ],
            [
                'id' => 750,
                'name' => 'Nangere',
                'state_id' => '36',
            ],
            [
                'id' => 751,
                'name' => 'Nguru Potiskum',
                'state_id' => '36',
            ],
            [
                'id' => 752,
                'name' => 'Tarmua',
                'state_id' => '36',
            ],
            [
                'id' => 753,
                'name' => 'Yunusari',
                'state_id' => '36',
            ],
            [
                'id' => 754,
                'name' => 'Yusufari',
                'state_id' => '36',
            ],
            [
                'id' => 755,
                'name' => 'Anka',
                'state_id' => '37',
            ],
            [
                'id' => 756,
                'name' => 'Bakura',
                'state_id' => '37',
            ],
            [
                'id' => 757,
                'name' => 'Birnin Magaji',
                'state_id' => '37',
            ],
            [
                'id' => 758,
                'name' => 'Bukkuyum',
                'state_id' => '37',
            ],
            [
                'id' => 759,
                'name' => 'Bungudu',
                'state_id' => '37',
            ],
            [
                'id' => 760,
                'name' => 'Gummi',
                'state_id' => '37',
            ],
            [
                'id' => 761,
                'name' => 'Gusau',
                'state_id' => '37',
            ],

            [
                'id' => 762,
                'name' => 'Kaura',
                'state_id' => '37',
            ],
            [
                'id' => 763,
                'name' => 'Namoda',
                'state_id' => '37',
            ],
            [
                'id' => 764,
                'name' => 'Maradun',
                'state_id' => '37',
            ],
            [
                'id' => 765,
                'name' => 'Maru',
                'state_id' => '37',
            ],
            [
                'id' => 766,
                'name' => 'Shinkafi',
                'state_id' => '37',
            ],
            [
                'id' => 767,
                'name' => 'Talata Mafara',
                'state_id' => '37',
            ],
            [
                'id' => 768,
                'name' => 'Tsafe',
                'state_id' => '37',
            ],
            [
                'id' => 769,
                'name' => 'Zurmi ',
                'state_id' => '37',
            ]
        ]);
    }
}


 
 
 
 
 
 
 
 
