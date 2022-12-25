<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Course;
use App\Models\Platform;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $series=['Php', 'Laravel', 'Wordpress', 'Node', 'javaScript'];
        foreach($series as $item){
            Series::create([
                    'name'=>$item,
                ]
            );
        }
        $topics=['Eloquent', 'Validation', 'Authentication', 'Testing', 'Refactoring'];
        foreach($topics as $item){
            Topic::create([
                    'name'=>$item,
                ]
            );
        }
        $platforms=['w3school', 'W3resources', 'Dev.io', 'LWS', 'StackLearner'];
        foreach($platforms as $item){
            Platform::create([
                    'name'=>$item,
                ]
            );
        }
        $authors=['Sakib Uddin', 'Rasel Ahmed', 'Foyz Ullah', 'HM Nayeem', 'Sumit Saha'];
        foreach($authors as $item){
            Author::create([
                    'name'=>$item,
                ]
            );
        }

        User::factory(50)->create();//error solved by this line
        Course::factory(50)->create();

        $courses = Course::all();

        foreach ($courses as $course) {
            $topics = Topic::all()->random(rand(1,5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1,5))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series = Series::all()->random(rand(1,5))->pluck('id')->toArray();
            $course->series()->attach($series);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
