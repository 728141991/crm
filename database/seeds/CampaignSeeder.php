<?php

use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\campaign::create([
                'campaign_type'   => 'activity ',
                'campaign_status'    => 'on',
                'campaign_name' => 'campaign'.($i+1),
                'created_time' => date("Y-m-d H:i:s"),
                'modified' => '2016-7-30',
                'target_audience' => ''.($i+2),
                'budget_cost' =>$i+5,
                'actual_cost' =>$i+4,
            ]);
        }
    }
}
