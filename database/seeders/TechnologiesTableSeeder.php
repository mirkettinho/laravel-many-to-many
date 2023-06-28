<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;



class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = ["Technology1", "Technology2", "Technology3", "Technology4"];

        foreach($data as $technology){
          $new_technology = new Technology();
          $new_technology->name = $technology;
          $new_technology->slug = Str::slug($technology, "-");
          $new_technology->save();
        }
    }
}
