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
        DB                      :: table('tbl_productos')->insert([
            'code'              => 'PRD-001',
            'name'              => 'Reebook Blancos',
            'imgSrc'            => 'imagen 1',
            'descripcion'       => 'Zapatos reebook blancos con trenzas azules comodos de difetrentes tallas',
            'shortDescripcion'  => 'Zapatos reebook blancos',
            'typeCode'          => 'PRTY-001',
            'actualPrice'       => '10000',
            'existenc'          => '10',
            
        ]);
        DB                      :: table('tbl_productos')->insert([
            'code'              => 'PRD-002',
            'name'              => 'Rs 21 Casuales',
            'imgSrc'            => 'imagen 2',
            'descripcion'       => 'Zapatos Rs 21 casuales negros comodos de difetrentes tallas',
            'shortDescripcion'  => 'Zapatos Rs 21 casuales',
            'typeCode'          => 'PRTY-002',
            'actualPrice'       => '100000',
            'existenc'          => '100',
        ]);
        DB                      :: table('tbl_productos')->insert([
            'code'              => 'PRD-003',
            'name'              => 'Reebook Negros',
            'imgSrc'            => 'imagen 3',
            'descripcion'       => 'Zapatos reebook Negros con trenzas azules comodos de difetrentes tallas',
            'shortDescripcion'  => 'Zapatos reebook Negros',
            'typeCode'          => 'PRTY-001',
            'actualPrice'       => '10000',
            'existenc'          => '10',
        ]);
    }
}
