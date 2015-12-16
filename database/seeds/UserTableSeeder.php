<?php
use App\Entities\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Created by PhpStorm.
 * User: Paco
 * Date: 23/11/15
 * Time: 11:01
 */
class UserTableSeeder extends Seeder{

    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<=50;$i++){
           $id= \DB::table('users')->insertGetId([
                'email'=>$faker->email,
                'password'=>bcrypt('secret')
                ]);
            \DB::table('profiles')->insert([
                'user_id'=>$id,
                'name'=>$faker->name,
                'surname'=>$faker->lastName,
                'surname2'=>$faker->lastName,
                'callsign'=>$faker->name,
                'birthdate'=>$faker->dateTimeBetween('-30 years','-15 years')->format('Y-m-d'),
                'nationality'=>$faker->country,
                'country'=>$faker->country,
                'prov'=>$faker->city,
                'local'=>$faker->city,
                'addres'=>$faker->streetAddress,
                'first_tlf'=>$faker->phoneNumber,
                'second_tlf'=>$faker->phoneNumber,
                'photo'=>$faker->imageUrl(640,480),
                'photo_thumb'=>$faker->imageUrl(640,480),
                'sign'=>$faker->imageUrl(640,480),
                'sign_thumb'=>$faker->imageUrl(640,480),
                'squadron_id'=>$faker->numberBetween(1,10),
                'user_state_id'=>$faker->numberBetween(1,2),
                'show'=>true,
                'obs'=>$faker->paragraph(10,15),
                'internal_obs'=>$faker->paragraph(10,15),
                'type'=>$faker->randomElement(['colaborator','user'])
            ]);
        }

        /*Con fluent
        \DB::table('users')->insert([
            'email'=>'fmaymar@gmail.com',
            'password'=>'Fjmm..'
        ]);
       */

    }


}