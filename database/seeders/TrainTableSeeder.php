<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Train;
use Faker\Generator as Faker;
use App\Models\Train as ModelsTrain;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new ModelsTrain();
        $newTrain->arrivo = '';
        $newTrain->partenza = '';
        $newTrain->treno = '';
        $newTrain->carrozza = '';

        $newTrain->save();
    }
}
