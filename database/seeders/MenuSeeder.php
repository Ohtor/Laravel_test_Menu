<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


$days = array ();
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {   
        $days = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Special');
        foreach($days as $day)
        {
        DB::table('menus')->insert([
            'day' => $day,
        ]);}
    }
}
