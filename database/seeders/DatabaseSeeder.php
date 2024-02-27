<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Students;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'nama' => '10 PPLG 2'
        ]);

        Kelas::create([
            'nama' => '11 PPLG 1'
        ]);

        Kelas::create([
            'nama' => '11 PPLG 2'
        ]);

        Kelas::create([
            'nama' => '12 PPLG 1'
        ]);

        Kelas::create([
            'nama' => '12 PPLG 2'
        ]);

        \App\Models\Student::factory(10)->create();
    }
}
