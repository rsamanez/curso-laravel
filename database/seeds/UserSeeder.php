<?php
use App\User;
use App\Models\Profession;
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
        $professionId = Profession::where(['title' => 'Back-End Developer'])->value('id');
        User::create([
           'name' => 'Dulio Salazar',
           'email' => 'dsalazar@proande.com',
           'password' => bcrypt('laravel'),
           'profession_id' => $professionId,
        ]);

        // loading 20 ramdon users
        factory(User::class,20)->create([
            'profession_id' => $professionId
        ]);

        $professionId = Profession::where(['title' => 'Front-End Developer'])->value('id');
        User::create([
            'name' => 'Luis Pumaricra',
            'email' => 'lpuma@proande.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);

        // loading 20 ramdon users
        factory(User::class,20)->create([
            'profession_id' => $professionId
        ]);

        $professionId = Profession::where(['title' => 'Web Developer'])->value('id');
        User::create([
            'name' => 'Rommel Samanez',
            'email' => 'rsamanez@proande.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);

        // loading 20 ramdon users
        factory(User::class,20)->create([
            'profession_id' => $professionId
        ]);
    }
}
