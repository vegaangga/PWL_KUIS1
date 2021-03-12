<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_supplier = [
            [
                'supplier_name'=>'Fenita Aurora',
                'supplier_phone'=>'(0240)-00115483',
                'supplier_email'=>'FenitaA@gmail.com',
                'supplier_address'=>'Jln. A. Yani, Malang'
            ],
        
            [
                'supplier_name'=>'Rizky Ardian',
                'supplier_phone'=>'(0348)-88445140',
                'supplier_email'=>'RArdrian_1@gmail.com',
                'supplier_address'=>'Jln. Kemangi, Pasuruan'
            ],

            [
                'supplier_name'=>'Reyna Azizah',
                'supplier_phone'=>'(0345)-55441203',
                'supplier_email'=>'ReyAzizah@gmail.com',
                'supplier_address'=>'Jln. Anggreka2, Bekasi'
            ],

            [
                'supplier_name'=>'Debyan Firmansyah',
                'supplier_phone'=>'(0343)-90456210',
                'supplier_email'=>'Dfirman_syah@gmail.com',
                'supplier_address'=>'Jln. Setia Budi, Jakarta Selatan'
            ],

            [
                'supplier_name'=>'Santy Febrianty',
                'supplier_phone'=>'(0245)-55802121',
                'supplier_email'=>'SantyAnty@gmail.com',
                'supplier_address'=>'Jln. Diponegoro, Pemalang'
            ],

            [
                'supplier_name'=>'Chandra Putra',
                'supplier_phone'=>'(0345)-55841020',
                'supplier_email'=>'CPutra11@gmail.com',
                'supplier_address'=>'Jln. Bunga Cokelat, Tasikmalaya'
            ],

            [
                'supplier_name'=>'Qodru Andi Santosa',
                'supplier_phone'=>'(0343)-81547896',
                'supplier_email'=>'qas_santos@gmail.com',
                'supplier_address'=>'Jln. Anggrek, Surabaya'
            ],

            [
                'supplier_name'=>'Annisa Dwi',
                'supplier_phone'=>'(02930-88741500)',
                'supplier_email'=>'Dwi_Annisa23@gmail.com',
                'supplier_address'=>'Jln. Bumi Indah, Wonosari'
            ],

            [
                'supplier_name'=>'Firman Adriansyah',
                'supplier_phone'=>'(0343)-00154801',
                'supplier_email'=>'Firmanadri@gmail.com',
                'supplier_address'=>'Jln. Pangeran Antasari, Jakarta Selatan'
            ],

            [
                'supplier_name'=>'Andikha Sofyan',
                'supplier_phone'=>'(0343)-77441580',
                'supplier_email'=>'Andi_7@gmail.com',
                'supplier_address'=>'Jln. Soekarna-Hatta, Semarang'
            ]

        ];

        DB::table('supplier')->insert($data_supplier);
    }
}
