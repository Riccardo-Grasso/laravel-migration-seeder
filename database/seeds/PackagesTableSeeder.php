<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $travel_packages = [
            [
                "package_name" => "Nome",
                "description" => "Descrizione",
                "date_start" => "01/01/2022",
                "date-end" => "02/01/2022",
                "price" => "1000€"
            ],
        ];

        for ($i = 0; $i < 6; $i++) {
            $newPackage = new Package();
            $newPackage->package_name = $faker->sentence();
            $newPackage->description = $faker->realText(500);
            $newPackage->date_start = $faker->date();
            $newPackage->date_end = $faker->date();
            $newPackage->price = $faker->randomNumber(5);
            $newPackage->save();
        }
    }
}
