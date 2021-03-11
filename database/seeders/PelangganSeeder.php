<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pelanggan::insert([
            [
                'title' => 'BEST',
                'content' => 'HTML TEMPLATE',
                'featured_image' => '/img/gallery-item-01.jpg'
            ],
            [
                'title' => 'TOP',
                'content' => 'CSS THEME',
                'featured_image' => '/img/gallery-item-02.jpg'
            ],
            [
                'title' => 'BEST',
                'content' => 'HTML TEMPLATE',
                'featured_image' => '/img/gallery-item-03.jpg'
            ],
            [
                'title' => 'GREAT',
                'content' => 'WEB THEME',
                'featured_image' => '/img/gallery-item-04.jpg'
            ],
            [
                'title' => 'BEST',
                'content' => 'HTML COLLECTION',
                'featured_image' => '/img/gallery-item-05.jpg'
            ],
            [
                'title' => 'MAX',
                'content' => 'CSS LAYOUT',
                'featured_image' => '/img/gallery-item-06.jpg'
            ],
            [
                'title' => 'BEST',
                'content' => 'HTML LAYOUT',
                'featured_image' => '/img/gallery-item-07.jpg'
            ],
            [
                'title' => 'BEST',
                'content' => 'CSS TEMPLATE',
                'featured_image' => '/img/gallery-item-08.jpg'
            ],
            [
                'title' => 'GREAT',
                'content' => 'HTML DESIGN',
                'featured_image' => '/img/gallery-item-09.jpg'
            ],
            [
                'title' => 'TOP',
                'content' => 'CSS COLLECTION',
                'featured_image' => '/img/gallery-item-10.jpg'
            ]
        ]);
    }
}
