<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Supplier::insert([
            [
                'title' => 'Business Strategy',
                'content' => 'Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.',
                'featured_image' => '/img/services-1.jpg'
            ],
            [
                'title' => 'Digital Marketing',
                'content' => 'Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services.',
                'featured_image' => '/img/services-2.jpg'
            ],
            [
                'title' => 'Social Platforms',
                'content' => 'Social platform is a web-based technology that enables the development, deployment and management of social media solutions and services. It provides the ability to create social media websites and services with complete social media network functionality.',
                'featured_image' => '/img/services-3.jpg'
            ],
            [
                'title' => 'New Media',
                'content' => 'New Media atau media online didefinisikan sebagai produk dari komunikasi yang termediasi teknologi yang terdapat bersama dengan komputer digital (Creeber dan Martin, 2009).',
                'featured_image' => '/img/services-4.jpg'
            ],
            [
                'title' => 'Desain Grafis',
                'content' => 'Desain grafis merupakan suatu bentuk dari komunikasi visual yang memanfaatkan gambar sebagai media untuk menyampaikan pesan atau informasi seefektif mungkin.',
                'featured_image' => '/img/services-5.jpg'
            ],
            [
                'title' => 'Manage Time',
                'content' => 'Time Management Definition “Time management” is the process of organizing and planning how to divide your time between specific activities.',
                'featured_image' => '/img/services-6.jpg'
            ],
            [
                'title' => 'Video Maker',
                'content' => 'Promosi akan lebih mudah dan efektif jika menggunakan media video sebagai pendukung utama. Maka dari itu, sangat dibutuhkan skill video maker.',
                'featured_image' => '/img/services-7.jpg'
            ],
            [
                'title' => 'Diagram Collection',
                'content' => 'A diagram is a symbolic representation of information using visualization techniques. Diagrams have been used since ancient times on walls of caves , but became more prevalent during the Enlightenment.',
                'featured_image' => '/img/services-8.jpg'
            ],
            [
                'title' => 'Technology',
                'content' => 'Teknologi merupakan penerapan pengetahuan ilmiah untuk tujuan praktis dalam kehidupan manusia atau pada perubahan dan manipulasi lingkungan manusia.',
                'featured_image' => '/img/services-9.jpg'
            ],
            [
                'title' => 'Human Resource',
                'content' => 'Human resources is the set of people who make up the workforce of an organization, business sector, industry, or economy.',
                'featured_image' => '/img/services-10.jpg'
            ]
        ]);
    }
}
