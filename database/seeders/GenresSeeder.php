<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['name' =>'Sience-Fiction']);
        Genre::create(['name' =>'Romance']);
        Genre::create(['name' =>'Psichology']);

    }
}
