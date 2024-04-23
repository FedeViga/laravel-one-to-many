<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->title = $faker->numerify('Project-####');
            $newProject->description = $faker->text(500);
            $newProject->thumb = 'project_images/' . $faker->uuid();
            $newProject->technologies = implode(', ', $faker->randomElements(['html', 'css', 'javascript', 'vue.js', 'php', 'laravel'], null));
            $newProject->link = 'https://github.com/' . $newProject->title;

            $newProject->save();
        }
    }
}
