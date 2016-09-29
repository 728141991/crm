<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\contact::create([
                'first_name'   => 'contact'.($i+1),
                'last_name'    => 'james',
                'title' => 'MD MPH',
                'organization_id' => '1',
                'email' =>'123@qq.com',
                'office_phone' =>'13672889002',
            ]);
        }
    }
}
