<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'Nara',
            'grade_level' => '3',
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'teacher_id' => '123456',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'section_id' => 1,
        ]);
    }
}
