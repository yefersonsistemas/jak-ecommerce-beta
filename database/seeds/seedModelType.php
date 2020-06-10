<?php

use Illuminate\Database\Seeder;

class seedModelType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_typeModel')->insert([
            'code'              => 'TM-001',
            'codeModel'         => 'MC-001',
            'name'              => 'Botines',
        ]);
        DB                      :: table('tbl_typeModel')->insert([
            'code'              => 'TM-002',
            'codeModel'         => 'MC-002',
            'name'              => 'Deportivos',
        ]);
        DB                      :: table('tbl_typeModel')->insert([
            'code'              => 'TM-003',
            'codeModel'         => 'MC-001',
            'name'              => 'Sandalias',
        ]);
    }
}
