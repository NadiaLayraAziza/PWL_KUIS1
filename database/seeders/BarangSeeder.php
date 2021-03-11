<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Barang::insert([
            [
                'title' => 'BEST COLLECTION',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'featured_image' => '/img/img-3x2-01.jpg'
            ],
            [
                'title' => 'NEW DESIGN FOR YOUR WEBSITE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem at nisl malesuada, quis.',
                'featured_image' => '/img/img-3x2-02.jpg'
            ],
            [
                'title' => 'MOST UNIQUE IDEA EVER MADE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas.',
                'featured_image' => '/img/img-3x2-03.jpg'
            ],
            [
                'title' => 'SIMPLE TOUCH',
                'content' => 'Please tell your friends about TemplateMo website. Thank you.',
                'featured_image' => '/img/img-3x2-04.jpg'
            ],
            [
                'title' => 'EASY TO MAKE ENJOY',
                'content' => 'Nikmati kebersamaan keluarga untuk menikmati hidupmu. Keep care your family!.',
                'featured_image' => '/img/img-3x2-05.jpg'
            ],
            [
                'title' => 'HAVE A NICE MEAL',
                'content' => 'Desain ruang makan mempengaruhi selera makanmu. Jagalah kebersihan ruang makanmu, agar terhindar dari segala penyakit.',
                'featured_image' => '/img/img-3x2-06.jpg'
            ],
            [
                'title' => 'ENJOY YOUR LIFE',
                'content' => 'Enjoy yourself and find joy in this present moment. Watch the excerpt from the tao of practice to get a feel for the kata and how to get integrate the kata into your daily life.
                ',
                'featured_image' => '/img/img-3x2-07.jpg'
            ],
            [
                'title' => 'INTERIOR FOR CLASSIC',
                'content' => 'Membuat yang simple menjadi rumit itu sudah biasa, membuat yang rumit menjadi simple itu benar-benar menakjubkan, dan itulah kreativitas.
                ',
                'featured_image' => '/img/img-3x2-08.jpg'
            ],
            [
                'title' => 'ALL OF ABOUT WHITE',
                'content' => 'Pemahaman itu sama, hanya berbeda pengolahan dan pandangan. Jangan membuat semua jadi abu-abu tapi jadikan itu putih atau hitam.
                ',
                'featured_image' => '/img/img-3x2-09.jpg'
            ],
            [
                'title' => 'RETRO DESIGN',
                'content' => 'Design your own Retro to make you relax',
                'featured_image' => '/img/img-3x2-10.jpg'
            ]
        ]);
    }
}
