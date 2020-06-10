<?php

use Illuminate\Database\Seeder;

class seedModelClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_model')->insert([
            'code'              => 'MC-001',
            'name'              => 'Reebook',
        ]);
        DB                      :: table('tbl_model')->insert([
            'code'              => 'MC-002',
            'name'              => 'RS 21',
        ]);
        DB                      :: table('tbl_model')->insert([
            'code'              => 'MC-003',
            'name'              => 'Air Jordan',
        ]);
    }
}
