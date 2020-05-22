<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            [
            'nome' => 'Microsoft'
            ],
            [
                'nome' => 'Facebook'
            ]
        ]);
    }
}
