<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Course::class, 30)->create();
      factory(App\Assignment::class, 30)->create();
    }
}
