<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\DataLaptop;
use App\Models\Peminjaman;
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

        // Seeder User
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@app.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name' => 'Kamachiii',
            'email' => 'kamahi@app.com',
            'password' => bcrypt('kamachi123'),
        ]);

        // Seeder DataLaptop
        DataLaptop::create([
            'no_laptop' => 1
        ]);
        DataLaptop::create([
            'no_laptop' => 21
        ]);
        DataLaptop::create([
            'no_laptop' => 32
        ]);
        DataLaptop::create([
           'no_laptop' => 4
        ]);

        // Seeder Peminjaman
        Peminjaman::create([
            'nisn' => 12108599,
            'nama' => 'Muhammad Kamil',
            'rombel' => 'PPLG XI-1',
            'rayon' => 'Cibedug 2',
            'no_laptop' => 99,
            'ruangan' => 1,
        ]);
        Peminjaman::create([
            'nisn' => 12345678,
            'nama' => 'Tamuramaro Kamachi',
            'rombel' => 'PPLG XI-0',
            'rayon' => 'Cibedug 0',
            'no_laptop' => 0,
            'ruangan' => 99,
        ]);

    }
}
