<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pegawai::insert([
            [
                'name' => 'JOHN STONE',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-01.jpg'
            ],
            [
                'name' => 'JANE MELDRUM',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-02.jpg'
            ],
            [
                'name' => 'TREVOR VIRTUE',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-03.jpg'
            ],
            [
                'name' => 'EMILY MOORE',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-04.jpg'
            ],
            [
                'name' => 'CLAIRE LI',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-05.jpg'
            ],
            [
                'name' => 'ELIZABETH SHU',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-06.jpg'
            ],
            [
                'name' => 'DANIA LIU',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-07.jpg'
            ],
            [
                'name' => 'MIRACLE YOUNG',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-08.jpg'
            ],
            [
                'name' => 'CHARLIE PUTH',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-09.jpg'
            ],
            [
                'name' => 'ASA BUTTERFIELD',
                'fb' => 'https://fb.com',
                'twitter' => 'https://twitter.com',
                'ig' => 'https://instagram.com',
                'featured_image' => '/img/team-img-10.jpg'
            ]
        ]);
    }
}
