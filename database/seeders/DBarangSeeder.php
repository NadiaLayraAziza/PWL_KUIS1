<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DBarang::insert([
            [
                'gambar' => '/img/barang-01.jpg',
                'kode' => 'B01',
                'nama_barang' => 'Laptop HP 14S-dk0073AU',
                'stok' => 10,
                'harga' => 4375000
            ],
            [
                'gambar' => '/img/barang-02.jpg',
                'kode' => 'B02',
                'nama_barang' => 'Logitech pebble m350',
                'stok' => 97,
                'harga' => 275000
            ],
            [
                'gambar' => '/img/barang-03.jpg',
                'kode' => 'B03',
                'nama_barang' => 'EPSON EB-X100',
                'stok' => 65,
                'harga' => 3450000
            ],
            [
                'gambar' => '/img/barang-04.jpg',
                'kode' => 'B04',
                'nama_barang' => 'Webcam FULLHD 2MP 1080p',
                'stok' => 19,
                'harga' => 165000
            ],
            [
                'gambar' => '/img/barang-05.jpg',
                'kode' => 'B05',
                'nama_barang' => 'Hikvision DS-2CD2125FWD-I',
                'stok' => 6,
                'harga' => 1348000
            ],
            [
                'gambar' => '/img/barang-06.jpg',
                'kode' => 'B06',
                'nama_barang' => 'REDRAGON Mechanical Gaming Keyboard Optical Rgb Brahma K586RGB-PRO',
                'stok' => 2,
                'harga' => 1116900
            ],
            [
                'gambar' => '/img/barang-07.jpg',
                'kode' => 'B07',
                'nama_barang' => 'DA Headset Gaming Titan Premium Black',
                'stok' => 210,
                'harga' => 578999
            ],
            [
                'gambar' => '/img/barang-08.jpg',
                'kode' => 'B08',
                'nama_barang' => 'CANON PowerShot SX70 Digital Camera',
                'stok' => 31,
                'harga' => 7635000
            ],
            [
                'gambar' => '/img/barang-09.jpg',
                'kode' => 'B09',
                'nama_barang' => 'Samsung Galaxy Tab A 8.0 (2019) T295 8inch, 32GB, 2GB RAM, Wi-Fi, 4G LTE, Carbon Black | 3112-SAMSUNG-1404',
                'stok' => 150,
                'harga' => 1750000
            ],
            [
                'gambar' => '/img/barang-10.jpg',
                'kode' => 'B10',
                'nama_barang' => 'Speaker FLECO F-026 - Speaker Mini Komputer',
                'stok' => 1,
                'harga' => 78000
            ],
            [
                'gambar' => '/img/barang-11.jpg',
                'kode' => 'B11',
                'nama_barang' => 'Meja Laptop Portable',
                'stok' => 79,
                'harga' => 105000
            ],
            [
                'gambar' => '/img/barang-12.jpg',
                'kode' => 'B12',
                'nama_barang' => 'SanDisk 64GB USB Flash Drive',
                'stok' => 24,
                'harga' => 108.000
            ]
        ]);
    }
}
