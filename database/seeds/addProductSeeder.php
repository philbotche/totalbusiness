<?php
use App\Product;
use App\Catalog;
use Illuminate\Database\Seeder;

class addProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert produc
        $faker = Faker\Factory::create();

        for($i=0; $i < 25; $i++){
            Product::create([
                'name' =>$faker->name,
                'description'=>$faker->text,
                'price'=>$faker->numberBetween(500, 3000),
                'quantity'=>10,
                'images'=>'https://via.placeholder.com/200x200',
                'sku'=>'025879632'
            ]);
        }
    }
}
