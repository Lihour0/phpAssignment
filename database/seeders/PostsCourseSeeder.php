<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $courses = [
            'title'=> "test",
            'paid_course' => false,
            'bg_img' => 'bro',
            'author_id' => 40
        ];
        Course::create($courses);
    }
}
