<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Illuminate\Support\Str;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function definition() :array 
    {     return[
        'title' => fake()->sentence(),
        'description' => fake()->paragraph()
    ];
    }
    }
