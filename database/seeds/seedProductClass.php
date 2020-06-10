<?php

use Illuminate\Database\Seeder;

class seedProductClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB                      :: table('tbl_productClass')->insert([
            'code'              => 'CLASS-001',
            'name'              => 'Calzado',
        ]);
        DB                      :: table('tbl_productClass')->insert([
            'code'              => 'CLASS-002',
            'name'              => 'Accesorios',
        ]);
        DB                      :: table('tbl_productClass')->insert([
            'code'              => 'CLASS-003',
            'name'              => 'Joyeria',
        ]);
    }
}
