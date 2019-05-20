<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       App\Setting::create([

        'site_name'=>'investment in egypt',
        'contact_email'=>'abdallahkhalid228@hotmail.com',
        'contact_phone'=>'01288587519',
        'address'=>'cairo',
        ]);

       
    }
}
