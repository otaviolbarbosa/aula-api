<?php

use Illuminate\Database\Seeder;
use App\Escola;

class EscolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Escola::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
        	Escola::create([
        		'nome' => 'Escola ' . $faker->company,
        		'endereco' => $faker->address,
        		'telefone' => $faker->phoneNumber,
        	]);
        }
    }
}
