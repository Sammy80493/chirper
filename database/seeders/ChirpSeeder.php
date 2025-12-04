<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Chirp::with('user')->create([
            'message' => "Just finished setting up my Laravel backend. Now I'm working on the UI using Tailwind CSS. It's much faster than writing custom CSS!"
        ]);
    }
}
