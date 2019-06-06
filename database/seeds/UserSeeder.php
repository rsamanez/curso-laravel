<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $professions = DB::table('professions')->select('id')->take(1)->get();
       // $profession = DB::table('professions')->select('id')->first();
        $professionId = DB::table('professions')
            //->where('title' , 'Back-End Developer')
            ->where(['title' => 'Back-End Developer'])
            ->value('id');
        DB::table('users')->insert([
           'name' => 'DUlio Salazar',
           'email' => 'dsalazar@proande.com',
           'password' => bcrypt('laravel'),
           //'profession_id' => $professions->first()->id,
           //'profession_id' => $profession->id,
           'profession_id' => $professionId,
        ]);
    }
}
