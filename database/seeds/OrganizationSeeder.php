<?php

use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('organizations')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\organization::create([
                'organization_name'   => 'organization'.($i+1),
                'city'    => 'guangzhou',
                'website' => 'www.baidu.com',
                'phone' => '13570478289',
            ]);
        }
    }
}
