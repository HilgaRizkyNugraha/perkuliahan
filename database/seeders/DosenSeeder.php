<?php

namespace Database\Seeders;
use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        for ($i = 0; $i < 10; $i++) {
            Dosen::create([
                'nama' => $faker->name,
                'nip' => $faker->unique()->numerify('########'),
                'prodi_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
