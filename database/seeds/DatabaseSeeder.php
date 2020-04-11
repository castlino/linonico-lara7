<?php

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
        // $this->call(UsersTableSeeder::class);
        
        //Create lino user.
        DB::table('users')->insert([
            'name' => 'Lino Castro',
            'email' => 'castlino@gmail.com',
            'password' => Hash::make('lino'),
        ]);
        
        //Create old topics.
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'Linux HOW-TOs',
        ]);
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'Web Development',
        ]);
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'CakePHP tiPs',
        ]);
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'Networking',
        ]);
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'iPhone Development',
        ]);
        DB::table('topics')->insert([
            'user_id' => 1,
            'name' => 'MySQL',
        ]);
        
    }
}
