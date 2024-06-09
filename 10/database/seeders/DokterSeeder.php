<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Aria Dillah',
                'gender' => 'pria',
                'tmp_lahir' => 'bogor',
                'tgl_lahir' => '2005-10-04',
                'kategori' => 'Umum',
                'telepon' => '085814019209',
                'alamat' => 'jl raya jasinga-tenjo'
            ],

            [
                'nama' => 'Dr. Mahdi Safutra',
                'gender' => 'pria',
                'tmp_lahir' => 'depok',
                'tgl_lahir' => '2005-02-20',
                'kategori' => 'Bidan',
                'telepon' => '085677890234',
                'alamat' => 'jl bikun no 2'
            ],
        
            [
                'nama' => 'Dr. Faturrahman Alfarisi',
                'gender' => 'pria',
                'tmp_lahir' => 'bogor',
                'tgl_lahir' => '2001-05-31',
                'kategori' => 'Spesialis',
                'telepon' => '083198673456',
                'alamat' => 'jl bintang no 6'
            ],

            [
                'nama' => 'Dr. Kurnia Mega',
                'gender' => 'pria',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '2002-08-29',
                'kategori' => 'Anastesi',
                'telepon' => '089433749733',
                'alamat' => 'jl biduan no 5'
            ],

            [
                'nama' => 'Dr. Dinda',
                'gender' => 'wanita',
                'tmp_lahir' => 'jakarta',
                'tgl_lahir' => '2006-05-12',
                'kategori' => 'Dokter gigi',
                'telepon' => '085897453217',
                'alamat' => 'jl biduan no 5'
            ],
        ]);
    }
}