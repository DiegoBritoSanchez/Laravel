<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course();

        $course->name = 'laravel';
        $course->description = 'example for class';
        $course->category = 'course';

        $course->save();

        $course2 = new Course();

        $course2->name = 'laravel';
        $course2->description = 'example for class';
        $course2->category = 'course';

        $course2->save();

        $course3 = new Course();

        $course3->name = 'laravel';
        $course3->description = 'example for class';
        $course3->category = 'course';

        $course3->save();
    }
}
