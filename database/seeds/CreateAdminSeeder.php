<?php
use Illuminate\Database\Seeder;
use App\Entities\User;
use App\Entities\Profile;
use Faker\Factory as Faker;

/**
 * Created by PhpStorm.
 * User: Paco
 * Date: 24/11/15
 * Time: 12:21
 */
class CreateAdminSeeder extends Seeder{

    public function run(){

        $faker=Faker::create();

        User::create([
            'email'=>'fmaymar@gmail.com',
            'password'=>bcrypt('fjmm..')
        ]);

        Profile::create([
            'user_id'=>1,
            'name'=>'Francisco José',
            'surname'=>'Mayor',
            'surname2'=>'Martín',
            'callsign'=>'PacoR',
            'birthdate'=>'1976/09/09',
            'nationality'=>'España',
            'country'=>'España',
            'prov'=>'Santa Cruz de Tenerife',
            'local'=>'Icod de los Vinos',
            'addres'=>'C/ Key Muñoz 30',
            'first_tlf'=>'654150974',
            'second_tlf'=>'922814597',
            'photo'=>$faker->imageUrl(640,480),
            'photo_thumb'=>$faker->imageUrl(640,480),
            'sign'=>$faker->imageUrl(640,480),
            'sign_thumb'=>$faker->imageUrl(640,480),
            'squadron_id'=>1,
            'user_state_id'=>1,
            'show'=>true,
            'obs'=>$faker->paragraph(10,15),
            'internal_obs'=>$faker->paragraph(10,15),
            'type'=>'admin'
        ]);
    }

}