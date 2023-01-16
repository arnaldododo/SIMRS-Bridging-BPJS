<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('bpjs_settings')->insert([
            'username' => 'bpjs',
            'password' => Hash::make('password')
        ]);

        DB::table('polis')->insert([
            'kode_poli' => '001',
            'nama_poli' => 'Penyakit Dalam',
            'kode_antrean' => 'A'
        ]);

        DB::table('jadwal_operasis')->insert([
            'kode_booking' => 'OP123456',
            'no_bpjs' => '0001231234455',
            'tanggal_operasi' => now(),
            'jenis_tindakan' => 'Bedah',
            'poli_id' => 1,
            'terlaksana' => 0
        ]);
    }
}
