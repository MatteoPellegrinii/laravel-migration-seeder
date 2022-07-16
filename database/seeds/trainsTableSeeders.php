<?php

use App\trains;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

// id 	created_at 	updated_at 	Nome_dell_azienda 	Stazione_di_partenza 	Stazione_di_arrivo 	orario_partenza 	orario_arrivo 	codice_treno 	numero_carrozze 	in_orario 	cancellato 	

class trainsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 1000; $i++) { 
            $train= new trains();
            $train->Nome_dell_azienda = $faker->name();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = rand(10000, 19999);
            $train->numero_carrozze = rand(8, 30);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
            

        }
    }
}
