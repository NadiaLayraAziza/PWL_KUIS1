<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddSupplierSeeder extends Seeder
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
                'title' => 'Online Transaction',
                'content' => 'Online transaction is a payment method in which the transfer of fund or money happens online over electronic fund transfer.',
                'featured_image' => '/img/services-11.jpg'
            ],
            [
                'title' => 'Globalisasi',
                'content' => 'Globalisasi adalah proses integrasi internasional yang terjadi karena pertukaran pandangan dunia, produk, pemikiran, dan aspek-aspek kebudayaan lainnya.',
                'featured_image' => '/img/services-12.jpg'
            ]
        ]);
    }
}
