<?php

use Illuminate\Database\Seeder;

class seedProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_product')->insert([
            'code'              => 'PRD-001',
            'name'              => 'Reebook Blancos',
            'imgSrc'            => 'images/1.jpg',
            'description'       => 'Zapatos reebook blancos con trenzas azules comodos de difetrentes tallas',
            'shortDescription'  => 'Zapatos reebook blancos',
            'typeCode'          => 'PRTY-001',
            'typeModel'         => 'TM-001',
            'materials'         => 'suela',
            'actualPrice'       => '10000',
            'existence'          => '10',
        ]);
        DB                      :: table('tbl_product')->insert([
            'code'              => 'PRD-002',
            'name'              => 'Reebook Rojos',
            'imgSrc'            => 'images/2.jpg',
            'description'       => 'Zapatos reebook blancos con trenzas azules comodos de difetrentes tallas',
            'shortDescription'  => 'Zapatos reebook blancos',
            'typeCode'          => 'PRTY-002',
            'typeModel'         => 'TM-001',
            'materials'         => 'suela',
            'actualPrice'       => '10000',
            'existence'          => '10',
            
        ]);
        DB                      :: table('tbl_product')->insert([
            'code'              => 'PRD-003',
            'name'              => 'Reebook Negros',
            'imgSrc'            => 'images/3.jpg',
            'description'       => 'Zapatos reebook blancos con trenzas azules comodos de difetrentes tallas',
            'shortDescription'  => 'Zapatos reebook blancos',
            'typeCode'          => 'PRTY-001',
            'typeModel'         => 'TM-001',
            'materials'         => 'suela',
            'actualPrice'       => '10000',
            'existence'          => '10',
            
        ]);
    }
}
