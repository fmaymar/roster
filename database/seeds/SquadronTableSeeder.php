<?php
use App\Entities\Squadron;
use Faker\Generator;

/**
 * Created by PhpStorm.
 * User: Paco
 * Date: 24/11/15
 * Time: 12:13
 */
class SquadronTableSeeder extends BaseSeeder{

    public function getModel()
    {
        return new Squadron();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'squadron'=> $faker->company,
            'country'=> $faker->country,
            'logo'=>'sqd.png',
            'web'=>'http://www.'.$faker->domainName,
            'description'=>$faker->paragraph(10,15),
            'internal_description'=>$faker->paragraph(10,15),
            'obs'=>$faker->paragraph(10,15)

        ];
    }

    public function run(){

        $this->createMultiple(10);

    }

}