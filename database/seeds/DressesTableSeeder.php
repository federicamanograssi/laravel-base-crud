<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //GENERARE DATI CON FAKER
    /**
     * -inserisci il faker e il relativo metodo per riempire le proprietà
     */
    public function run(Faker $faker){

        for($i=0; $i <10;$i++){
            $new_dress = new Dress();

            $new_dress->type = $faker->word();
            $new_dress->name = $faker->word();
            $new_dress->size = $faker->randomElement(['xs','s','m','l','xl','2xl','unique']);
            $new_dress->price = $faker->randomnumber(2,true);
            $new_dress->save();
        }
    }


    //GENERARE DATI CON FILE INTERNO

    // public function run()
    // {
    //     //inserisco i dati qui o li chiamo attraverso file
    //     $dresses = config('dresses');

    //     foreach ($dresses as $dress ) {
    //         $new_dress = new Dress();

    //         $new_dress->type = $dress['type'];
    //         $new_dress->name = $dress['name'];
    //         $new_dress->size = $dress['size'];
    //         $new_dress->price = $dress['price'];
    //         $new_dress->save();
    //     }
    // }
}
