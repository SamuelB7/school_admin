<?php

namespace Database\Seeders;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('courses')->insert([
            [
                "name" => "Business Management",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Accounting",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Economy",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Mechanical Engineering",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Electrical Engineering",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Software Engineering",
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Computer Science",
                "created_at" => Carbon::now()
            ]
        ]);
    }
}
