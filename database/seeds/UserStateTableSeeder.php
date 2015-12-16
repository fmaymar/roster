<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Entities\UserState;

/**
 * Created by PhpStorm.
 * User: Paco
 * Date: 24/11/15
 * Time: 10:39
 */
class UserStateTableSeeder extends Seeder{

    public function run()
    {
        $faker=Faker::create();
        UserState::create([
            'state'=>'activo',
            'description'=>'El piloto está activo en el roster',
            'image'=>$faker->imageUrl(640,480),
            'image_thumb'=>$faker->imageUrl(64,48),
            'obs'=>$faker->paragraph(rand(5,15)),

        ]);

        UserState::create([
            'state'=>'inactivo',
            'description'=>'El piloto no está activo en el roster',
            'image'=>$faker->imageUrl(640,480),
            'image_thumb'=>$faker->imageUrl(64,48),
            'obs'=>$faker->paragraph(rand(5,15)),

        ]);

    }

}