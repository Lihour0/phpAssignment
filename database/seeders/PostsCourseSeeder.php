<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostsCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(10)->create();
        Course::factory(10)->create();
        Content::factory(20)->create();
    }
}
