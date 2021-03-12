<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pelanggan = [
            [
                'pelanggan_name'=>'Chindy Marifah',
                'pelanggan_phone'=>'084789012654',
                'pelanggan_email'=>'MarifahCindy@gmail.com',
                'pelanggan_address'=>'Jln. Dr. Soetomo, Surabaya',
                'pelanggan_image'=>'1.jpg'
            ],

            [
                'pelanggan_name'=>'Moch. Andika Soufany',
                'pelanggan_phone'=>'085597004569',
                'pelanggan_email'=>'AndikaSoufany@gmail.com',
                'pelanggan_address'=>'Jln. Kembang Sore, Dayurejo',
                'pelanggan_image'=>'2.jpg'
            ],

            [
                'pelanggan_name'=>'Muhammad Sofyan Abdullah',
                'pelanggan_phone'=>'085112369850',
                'pelanggan_email'=>'SofyanAbdul@gmail.com',
                'pelanggan_address'=>'Jln. Sampoerna, Pasuruan',
                'pelanggan_image'=>'3.jpg'
            ],

            [
                'pelanggan_name'=>'Chairil Anwar',
                'pelanggan_phone'=>'083350421003',
                'pelanggan_email'=>'ChairilA@gmail.com',
                'pelanggan_address'=>'Jln. Soekarno, Mojokerto',
                'pelanggan_image'=>'4.jpg'
            ],
          
            [
                'pelanggan_name'=>'Sendyra',
                'pelanggan_phone'=>'081217005441',
                'pelanggan_email'=>'Sensendy@gmail.com',
                'pelanggan_address'=>'Jln. Supratman, Malang',
                'pelanggan_image'=>'5.jpg'
            ],

            [
                'pelanggan_name'=>'Ronicha Putri',
                'pelanggan_phone'=>'081457880223',
                'pelanggan_email'=>'Ronicha@gmail.com',
                'pelanggan_address'=>'Jln. Sentul, Riau',
                'pelanggan_image'=>'6.jpg'
            ],

            [
                'pelanggan_name'=>'Andi Syaputra',
                'pelanggan_phone'=>'085236445211',
                'pelanggan_email'=>'AndiSya@gmail.com',
                'pelanggan_address'=>'Jln. Mahkota, Surabaya',
                'pelanggan_image'=>'7.jpg'
            ],

            [
                'pelanggan_name'=>'Muhammad Latief Syaifuddin',
                'pelanggan_phone'=>'089954100322',
                'pelanggan_email'=>'MLatief@gmail.com',
                'pelanggan_address'=>'Jln. Ambarawa, Depok',
                'pelanggan_image'=>'8.jpg'
            ],

            [
                'pelanggan_name'=>'Raffli Wendi',
                'pelanggan_phone'=>'087201451103',
                'pelanggan_email'=>'Raffliwe@gmail.com',
                'pelanggan_address'=>'Jln. RA. Kartini, Surabaya',
                'pelanggan_image'=>'9.jpg'
            ],
            
            [
                'pelanggan_name'=>'Sovia Lenita',
                'pelanggan_phone'=>'085741022965',
                'pelanggan_email'=>'Sovleni@gmail.com',
                'pelanggan_address'=>'Jln. Sumbawa, Lamongan',
                'pelanggan_image'=>'10.jpg'
            ]



        ];

        DB::table('pelanggan')->insert($data_pelanggan);
    }
}
