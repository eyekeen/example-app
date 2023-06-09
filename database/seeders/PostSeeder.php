<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Post::factory()
            ->count(15)
            ->create([
                'user_id' => random_int(1, 6),
                'title' => Str::random(5),
                'content' => Str::random(20),
                'published' => 1,
                'published_at' => Carbon::now(),
            ]);
    }
}
