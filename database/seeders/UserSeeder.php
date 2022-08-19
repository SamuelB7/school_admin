<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678')
        ]);

        $admin->assignRole('admin');

        $secretary = User::factory()->create([
            'name' => 'Secretary',
            'email' => 'secretary@email.com',
            'password' => Hash::make('12345678')
        ]);

        $secretary->assignRole('secretary');

        $treasurer = User::factory()->create([
            'name' => 'Treasurer',
            'email' => 'treasurer@email.com',
            'password' => Hash::make('12345678')
        ]);

        $treasurer->assignRole('treasurer');

        $professor1 = User::factory()->create([
            'name' => 'Professor1',
            'email' => 'professor1@email.com',
            'password' => Hash::make('12345678')
        ]);

        $professor1->assignRole('professor');

        $professor2 = User::factory()->create([
            'name' => 'Professor2',
            'email' => 'professor2@email.com',
            'password' => Hash::make('12345678')
        ]);

        $professor2->assignRole('professor');

        $professor3 = User::factory()->create([
            'name' => 'Professor3',
            'email' => 'professor3@email.com',
            'password' => Hash::make('12345678')
        ]);

        $professor3->assignRole('professor');

        $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++) {
            $student = null;
            $student = User::factory()->create([
                'name' => $faker->name(),
                'email' => "student$i@email.com",
                'password' => Hash::make('12345678')
            ]);

            $student->assignRole('student');
        }
    }
}
