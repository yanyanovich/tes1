<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //
            for ($i=1; $i < 15; $i++) { 
                # code...
            \Illuminate\Support\Facades\DB::table('posts')->insert([
                'title' => 'Post '.$i,
                'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere ipsa dolore quae, a illum repudiandae sint eos sed consequuntur et odio sapiente ea. Repellat animi iste incidunt reprehenderit assumenda.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
