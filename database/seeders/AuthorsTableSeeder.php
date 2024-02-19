<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
            $author = [
                'name' => '著者名'. $i,
                'kana' => 'チョシャメイ'. $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            DB::table('authors')->insert($author);
        }
    }
}
