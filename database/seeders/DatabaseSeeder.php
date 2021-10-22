<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(PostsTableSeeder::class);
        $this->call(biodataTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(PesananTableSeeder::class);
        $this->call(PembelianTableSeeder::class);
        $this->call(PembeliTableSeeder::class);
        $this->call(SuplierTableSeeder::class);
    }
}
