<?php

use Illuminate\Database\Seeder;

class seedProductType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_poductsType')->insert([
            'code'              => 'PRTY-001',
            'classCode'         => 'CLASS-001',
            'name'              => 'Zapatos Deportivos',
        ]);
        DB                      :: table('tbl_poductsType')->insert([
            'code'              => 'PRTY-002',
            'classCode'         => 'CLASS-002',
            'name'              => 'Zapatos de Vestir',
        ]);
        DB                      :: table('tbl_poductsType')->insert([
            'code'              => 'PRTY-003',
            'classCode'         => 'CLASS-001',
            'name'              => 'Tacones',
        ]);
    }
}
