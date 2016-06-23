<?php

use Illuminate\Database\Seeder;

class provincetblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('tbl_province')->insert([
	            'province_name' => 1,
	            'province_type' =>'Thành Phố'
        ]);
    }
}
