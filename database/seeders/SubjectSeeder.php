<?php

namespace Database\Seeders;

use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subjects")->insert([
            [
                "name" => "Math",
                "workload_hours" => 60,
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Financial math",
                "workload_hours" => 50,
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Physics",
                "workload_hours" => 60,
                "created_at" => Carbon::now()
            ],
            [
                "name" => "People management",
                "workload_hours" => 30,
                "created_at" => Carbon::now()
            ],
            [
                "name" => "Algorithms",
                "workload_hours" => 70,
                "created_at" => Carbon::now()
            ],
        ]);
    }
}
