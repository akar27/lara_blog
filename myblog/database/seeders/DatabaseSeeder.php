<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        User::factory(10)->has(Blog::factory(3))->create();
        // Blog::factory()->count(10)->create();
    }
}
