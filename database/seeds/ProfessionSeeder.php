<?php

use Illuminate\Database\Seeder;
use App\Models\Profession;
//use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

    public function run()
    {

        DB::table('professions')->insert([
           'title' => 'Back-End Developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Front-End Developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Web Developer',
        ]);
    }
     **/
     public function run()
     {
         Profession::create([
             'title' => 'Back-End Developer',
         ]);
         Profession::create([
             'title' => 'Front-End Developer',
         ]);
         Profession::create([
             'title' => 'Web Developer',
         ]);

     }
}
