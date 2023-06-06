<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Lecture',
            'email' => 'lec@gmail.com',
            'password' => bcrypt('lecture'),
            'role' => 'lecture',
        ]);

        User::factory()->create([
            'name' => 'Student',
            'email' => 'stu@gmail.com',
            'password' => bcrypt('student'),
            'role' => 'student',
        ]);
    }
}
