<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DPelanggan::insert([
            [
                'id_pelanggan' => 'P01',
                'nama' => 'Fifit Lia Agustina',
                'alamat' => 'Jl.Ketuwon',
                'nomor_hp' => '085987346098',
            ],
            [
                'id_pelanggan' => 'P02',
                'nama' => 'Herlina Syafhita Maharani',
                'alamat' => 'Jl. Pandansari',
                'nomor_hp' => '081235876906',
            ],
            [
                'id_pelanggan' => 'P03',
                'nama' => 'Muhammad Ilham Taufik',
                'alamat' => 'Jalan Purwosari',
                'nomor_hp' => '088976431842',
            ],
            [
                'id_pelanggan' => 'P04',
                'nama' => 'Rizal Fatkhur Rohman',
                'alamat' => 'Jl. Sengonagung',
                'nomor_hp' => '085789635245',
            ],
            [
                'id_pelanggan' => 'P05',
                'nama' => 'Wulidah Ainnur',
                'alamat' => 'Jl. Pandan',
                'nomor_hp' => '085235094691',
            ],
            [
                'id_pelanggan' => 'P06',
                'nama' => 'Yoga Pratama',
                'alamat' => 'Jl. Sekarmojo',
                'nomor_hp' => '085763067580',
            ],
            [
                'id_pelanggan' => 'P07',
                'nama' => 'Enik Susanti',
                'alamat' => 'Jl. Purwosari',
                'nomor_hp' => '088358642695',
            ],
            [
                'id_pelanggan' => 'P08',
                'nama' => 'Rendy Ferdiansyah',
                'alamat' => 'Jl. Kucur Sumberrejo',
                'nomor_hp' => '081267036583',
            ],
            [
                'id_pelanggan' => 'P09',
                'nama' => 'Yulianti Dwi',
                'alamat' => 'Jl. Jetak',
                'nomor_hp' => '085749665937',
            ],
            [
                'id_pelanggan' => 'P10',
                'nama' =>'Dwi Handayani',
                'alamat' => 'Jl. Pucangsari',
                'nomor_hp' => '081567957368',
            ],
            [
                'id_pelanggan' => 'P11',
                'nama' => 'Diansyah',
                'alamat' => 'Jl. Palang',
                'nomor_hp' => '085764869365',
            ],
            [
                'id_pelanggan' => 'P12',
                'nama' => 'Nova Akhmad Ramadhan',
                'alamat' => 'Jl. Pager',
                'nomor_hp' => '082564739590',
            ],
            [
                'id_pelanggan' => 'P13',
                'nama' => 'Alfi Nur Rohmatullah',
                'alamat' => 'Jl. Mbaos',
                'nomor_hp' => '088564738935',
            ],
            [
                'id_pelanggan' => 'P14',
                'nama' => 'Citra Nadya',
                'alamat' => 'Jl. Pati Unus',
                'nomor_hp' => '085764738576',
            ],
            [
                'id_pelanggan' => 'P15',
                'nama' => 'Agung Wicahyo',
                'alamat' => 'Jl. Ibu Pertiwi',
                'nomor_hp' => '085467856383',
            ],
            [
                'id_pelanggan' => 'P16',
                'nama' => 'Cantika Putri',
                'alamat' => 'Jl. Bogor',
                'nomor_hp' => '081578642578',
            ],
            [
                'id_pelanggan' => 'P17',
                'nama' => 'Ismaya',
                'alamat' => 'Jl. Manggihan',
                'nomor_hp' => '085678594032',
            ],
            [
                'id_pelanggan' => 'P18',
                'nama' => 'Kiano Bara',
                'alamat' => 'Jl. Diponegoro',
                'nomor_hp' => '085799672747',
            ],
            [
                'id_pelanggan' => 'P19',
                'nama' => 'Ananda Reysha Jerry',
                'alamat' => 'Jl. Semanggi Timur',
                'nomor_hp' => '088435768926',
            ],
            [
                'id_pelanggan' => 'P20',
                'nama' => 'April Loyen',
                'alamat' => 'Jl. Bunga Andong',
                'nomor_hp' => '085748365827',
            ]
        ]);
    }
}
