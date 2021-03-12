<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DSupplier::insert([
            [
                'logo' => '/img/supplier-01.jpg',
                'nama_perusahaan' => 'PT. Maxzer Solusi Steril',
                'alamat' => 'Jl. Karya Barat No.21, Purwantoro, Blimbing, Malang, Jawa Timur, Indonesia',
                'telepon' => '(+62) 821-3248-4668',
                'persediaan' => 'Elektronik Rumah Tangga Mesin Pasteurisasi, Mesin Giling, Mesin Spray Dryer, Mesin Pemeras Jeruk, Mesin Pencuci Buah, Mesin Mixer'
            ],
            [
                'logo' => '/img/supplier-02.jpg',
                'nama_perusahaan' => 'PT. Galih Cipta Wisesa',
                'alamat' => 'Taman Kota BSD Sektor XI Blok J-1/11 Kel. Setu, Kec. Setu, Kota Tangerang Selatan, Banten, Indonesia',
                'telepon' => '(+62) 81289185572',
                'persediaan' => 'Elektronik Rumah Tangga Dry Mist Maker Baskuma, Hand Sanitizer, Disinfektan, Kain Mop Klercide, High Purity Tubing, Platinum Cured Silicone Tubing'
            ],
            [
                'logo' => '/img/supplier-03.jpg',
                'nama_perusahaan' => 'PT. Jaya Utama Santikah',
                'alamat' => 'Jl. Daan Mogot KM 19 Kebun Besar Batu Ceper Tangerang 15122, Kota Tangerang, Banten, Indonesia',
                'telepon' => '(+62) 2155727787',
                'persediaan' => 'Elektronik Rumah Tangga Komputer, Furniture, Consumer Goods, Makanan, Minuman, Sembako'
            ],
            [
                'logo' => '/img/supplier-04.jpg',
                'nama_perusahaan' => 'Sinar Murni',
                'alamat' => 'Jl. Mangga Besar Raya 183 Harco Plaza Jembatan Merah lantai dasar no. 28-30, Jakarta Pusat, DKI Jakarta, Indonesia',
                'telepon' => '(+62) +62216295725',
                'persediaan' => 'Elektronik Rumah Tangga Jual Exhaust Fan Panasonic, Kipas Angin Industrial, Exhaust Fan Kdk, Exhaust Fan Panasonic, Kipas Angin, Ceiling Fan'
            ],
            [
                'logo' => '/img/supplier-05.jpg',
                'nama_perusahaan' => 'Sparepart Mesin Industri',
                'alamat' => 'Jl. Raya Cikarang - Cibarusah No. 27Lippo Cikarang - Bekasi 17550, Bekasi, Jawa Barat, Indonesia',
                'telepon' => '(+62) +62125694111',
                'persediaan' => 'Elektronik Rumah Tangga Gland Packing, Sheet Packing, Rubber Packing, Mechanical Seal, Heat Insulation, Rubber Lining'
            ],
            [
                'logo' => '/img/supplier-06.jpg',
                'nama_perusahaan' => 'PT. Win Electroindo Heat',
                'alamat' => 'Jl. Jembatan Tiga Raya No. 6A, Pejagalan, Penjaringan, Jakarta Utara, Jakarta Utara, DKI Jakarta, Indonesia',
                'telepon' => '(+62) 820-4211-0988',
                'persediaan' => 'Elektronik Rumah Tangga Tungku Peleburan, Alat Pemanas, Peralatan Instrumentasi Dan Kontrol, Insulation Heater, Mesin Industri, Alat Pengendali Industri'
            ],
            [
                'logo' => '/img/supplier-07.jpg',
                'nama_perusahaan' => 'PT. Subur Makmur Amanah',
                'alamat' => 'Jl. Wachid Hasyim 9C No. 3 Kebonsari, Panggungrejo, Pasuruan, Surabaya, Indonesia',
                'telepon' => '(+62) 851-4451-9886',
                'persediaan' => 'Perdagangan Besar Beras, Elektronik, Textile, Pakaian, Hasil Hutan, Hasil Pertanian'
            ],
            [
                'logo' => '/img/supplier-08.jpg',
                'nama_perusahaan' => 'CV. Arta Usaha Mandiri',
                'alamat' => 'Jl. Deltasari Indah AV No. 33-34 Perum Deltasari, Waru, Sidoarjo, Surabaya, Indonesia',
                'telepon' => '(+62) 855-1287-5418',
                'persediaan' => 'Hmi Weintek, Servo Panasonic, Panel Plc, Weintek Mt8071ip, Plc Panasonic, Kabel Nyfgby'
            ],
            [
                'logo' => '/img/supplier-09.jpg',
                'nama_perusahaan' => 'PT. Feihong Trading International',
                'alamat' => 'Jalan pangeran jayakarta komplek 66 blok B1, Jakarta Pusat, Jakarta, Indonesia',
                'telepon' => '(+62) 889-1167-5443',
                'persediaan' => 'Conveyor Belt, Roller, Spare Part Conveyor, Mesin Conveyor, Bracket Conveyor, Roller Conveyor'
            ],
            [
                'logo' => '/img/supplier-10.jpg',
                'nama_perusahaan' => 'CV. Era Teknik',
                'alamat' => 'Ruko Mega Grosir Cempaka Mas Blok K No.3, Jakarta Pusat, Jakarta, Indonesia',
                'telepon' => '(+62) 820-1768-3587',
                'persediaan' => 'Ac, Pendingin Ruangan, Multi V, Vrv, Air Curtain'
            ],
            [
                'logo' => '/img/supplier-11.jpg',
                'nama_perusahaan' => 'PT. Sinko Prima Alloy',
                'alamat' => 'Jl. Tambak Osowilangun No. 61, Pergudangan Osowilangun Permai, Surabaya, Indonesia',
                'telepon' => '(+62) 810-0000-3487',
                'persediaan' => 'Led Lamp, Lampu Ultraviolet, Sterilizator, Dehumidifier, Ozone Washer, Ozone Generator'
            ],
            [
                'logo' => '/img/supplier-12.jpg',
                'nama_perusahaan' => 'PT. Andalan Bangun Sejahtera',
                'alamat' => 'Jl. Sumur Batu no. 1 Kemayoran Jakarta Pusat, Jakarta Pusat, DKI Jakarta, Indonesia',
                'telepon' => '(+62) 881-4256-1128',
                'persediaan' => 'Glassware & Plasticware, Water Treatment, Electrical Test & Measuring Instrument, Chemical Reagent, Alat Ukur Dan Test'
            ]
        ]);
    }
}
