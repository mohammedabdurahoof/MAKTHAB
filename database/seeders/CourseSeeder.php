<?php

namespace Database\Seeders;

use App\Models\Courses;
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
        for ($i = 0; $i < 50; $i++) {
            Courses::created(
                [
                    'courseName' => 'asd',
                    'teacherId' => '1',
                    'category' => 'fasdfa',
                    'price' => '32',
                    'courseSummery' => 'safasfas',
                    'image'=> '1691632278.jpg',
                ]
            );
        }
    }
}
