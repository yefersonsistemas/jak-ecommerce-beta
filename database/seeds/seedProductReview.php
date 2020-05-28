<?php

use Illuminate\Database\Seeder;

class seedProductReview extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_review')->insert([
            'code'              => 'REW-001',
            'productCode'       => 'PRD-001',
            'comment'           => 'Baja calidad',
            'puntuation'        => '3',
        ]);
        DB                      :: table('tbl_review')->insert([
            'code'              => 'REW-002',
            'productCode'       => 'PRD-001',
            'comment'           => 'buena calidad',
            'puntuation'        => '4',
        ]);
        DB                      :: table('tbl_review')->insert([
            'code'              => 'REW-003',
            'productCode'       => 'PRD-001',
            'comment'           => 'baja calidad el envio tardo',
            'puntuation'        => '2',
        ]);
    }
}
