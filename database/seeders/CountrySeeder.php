<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert([
            [
                'code' => 'ID',
                'name' => 'Indonesia',
            ],
            [
                'code' => 'MY',
                'name' => 'Malaysia',
            ],
            [
                'code' => 'SG',
                'name' => 'Singapore',
            ],
            [
                'code' => 'TH',
                'name' => 'Thailand',
            ],
            [
                'code' => 'VN',
                'name' => 'Vietnam',
            ],
            [
                'code' => 'PH',
                'name' => 'Philippines',
            ],
            [
                'code' => 'KH',
                'name' => 'Cambodia',
            ],
            [
                'code' => 'LA',
                'name' => 'Laos',
            ],
            [
                'code' => 'MM',
                'name' => 'Myanmar',
            ],
            [
                'code' => 'BN',
                'name' => 'Brunei',
            ],
            [
                'code' => 'TL',
                'name' => 'Timor Leste',
            ],
            [
                'code' => 'CN',
                'name' => 'China',
            ],
            [
                'code' => 'HK',
                'name' => 'Hong Kong',
            ],
            [
                'code' => 'JP',
                'name' => 'Japan',
            ],
            [
                'code' => 'KR',
                'name' => 'Korea',
            ],
            [
                'code' => 'MO',
                'name' => 'Macao',
            ],
            [
                'code' => 'TW',
                'name' => 'Taiwan',
            ],
            [
                'code' => 'AU',
                'name' => 'Australia',
            ],
            [
                'code' => 'NZ',
                'name' => 'New Zealand',
            ],
            [
                'code' => 'AT',
                'name' => 'Austria',
            ],
            [
                'code' => 'BE',
                'name' => 'Belgium',
            ],
            [
                'code' => 'DK',
                'name' => 'Denmark',
            ],
            [
                'code' => 'FI',
                'name' => 'Finland',
            ],
            [
                'code' => 'FR',
                'name' => 'France',
            ], [
                'code' => 'DE',
                'name' => 'Germany',
            ],
            [
                'code' => 'GR',
                'name' => 'Greece',
            ],
            [
                'code' => 'IE',
                'name' => 'Ireland',
            ],
            [
                'code' => 'IT',
                'name' => 'Italy',
            ],
            [
                'code' => 'LU',
                'name' => 'Luxembourg',
            ],
            [
                'code' => 'NL',
                'name' => 'Netherlands',
            ],
            [
                'code' => 'PT',
                'name' => 'Portugal',
            ],
            [
                'code' => 'ES',
                'name' => 'Spain',
            ],
            [
                'code' => 'SE',
                'name' => 'Sweden',
            ],
            [
                'code' => 'CH',
                'name' => 'Switzerland',
            ],
            [
                'code' => 'GB',
                'name' => 'United Kingdom',
            ],
            [
                'code' => 'CA',
                'name' => 'Canada',
            ],
            [
                'code' => 'US',
                'name' => 'United States',
            ],
            [
                'code' => 'AR',
                'name' => 'Argentina',
            ],
            [
                'code' => 'BR',
                'name' => 'Brazil',
            ],
            [
                'code' => 'CL',
                'name' => 'Chile',
            ],
            [
                'code' => 'CO',
                'name' => 'Colombia',
            ],
            [
                'code' => 'MX',
                'name' => 'Mexico',
            ],
            [
                'code' => 'PE',
                'name' => 'Peru',
            ],
            [
                'code' => 'ZA',
                'name' => 'South Africa',
            ],
            [
                'code' => 'AE',
                'name' => 'United Arab Emirates',
            ],
            [
                'code' => 'IN',
                'name' => 'India',
            ],
            [
                'code' => 'AF',
                'name' => 'Afghanistan',
            ],
        ]);
    }
}
