<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TpsSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(PaslonSeeder::class);
        $this->call(PemiluSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(PemilihSeeder::class);
    }
}
