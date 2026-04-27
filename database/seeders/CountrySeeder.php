<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['name' => 'Philippines'],
            ['name' => 'Indonesia'],
            ['name' => 'Malaysia'],
            ['name' => 'Singapore'],
            ['name' => 'Thailand'], //6
            ['name' => 'Vietnam'],
            ['name' => 'Myanmar'], //8
            ['name' => 'Cambodia'],
            ['name' => 'Egypt'], //9
            ['name' => 'Brazil'], //10
            ['name' => 'Russia'], //11
            ['name' => 'Turkey'], //12
            ['name' => 'United States'], //13
            ['name' => 'China'], //14
            ['name' => 'United Kingdom'],
            ['name' => 'United Arab Emirates'],
            ['name' => 'Ukraine'], //17
            ['name' => 'Saudi Arabia'], //18
            ['name' => 'Netherlands'], //19
            ['name' => 'Japan'], //20
            ['name' => 'Germany'], //21
            ['name' => 'Canada'], //22
            ['name' => 'Laos'], //23
            ['name' => 'Moldova'], //24
            ['name' => 'Kazakhstan'], //25
            ['name' => 'Denmark'], //26
            ['name' => 'Nicaragua'], //27
            ['name' => 'Bolivia'], //28
            ['name' => 'Peru'], //29
            
            ['name' => 'Brunei'],
            ['name' => 'South Korea'],
            ['name' => 'Taiwan'],
            ['name' => 'Hong Kong'],
            ['name' => 'Mongolia'],

            ['name' => 'India'],
            ['name' => 'Pakistan'],
            ['name' => 'Bangladesh'],
            ['name' => 'Sri Lanka'],
            ['name' => 'Nepal'],
            ['name' => 'Mexico'],
            ['name' => 'Argentina'],
            ['name' => 'Chile'],
            ['name' => 'Colombia'],
            ['name' => 'Uruguay'],
            ['name' => 'Paraguay'],
            ['name' => 'Ecuador'],
            ['name' => 'Venezuela'],
            ['name' => 'Ireland'],
            ['name' => 'France'],
            ['name' => 'Spain'],
            ['name' => 'Italy'],
            ['name' => 'Belgium'],
            ['name' => 'Switzerland'],
            ['name' => 'Austria'],
            ['name' => 'Poland'],
            ['name' => 'Czech Republic'],
            ['name' => 'Slovakia'],
            ['name' => 'Hungary'],
            ['name' => 'Romania'],
            ['name' => 'Bulgaria'],
            ['name' => 'Greece'],
            ['name' => 'Portugal'],
            ['name' => 'Denmark'],
            ['name' => 'Sweden'],
            ['name' => 'Norway'],
            ['name' => 'Finland'],
            ['name' => 'Iceland'],
            ['name' => 'Estonia'],
            ['name' => 'Latvia'],
            ['name' => 'Lithuania'],
            ['name' => 'Belarus'],
            ['name' => 'Uzbekistan'],
            ['name' => 'Kyrgyzstan'],
            ['name' => 'Turkmenistan'],
            ['name' => 'Qatar'],
            ['name' => 'Kuwait'],
            ['name' => 'Bahrain'],
            ['name' => 'Oman'],
            ['name' => 'Jordan'],
            ['name' => 'Lebanon'],
            ['name' => 'Israel'],
            ['name' => 'Iran'],
            ['name' => 'Iraq'],
            ['name' => 'Morocco'],
            ['name' => 'Algeria'],
            ['name' => 'Tunisia'],

            ['name' => 'South Africa'],
            ['name' => 'Nigeria'],
            ['name' => 'Kenya'],
            ['name' => 'Ghana'],

            ['name' => 'Australia'],
            ['name' => 'New Zealand'],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}