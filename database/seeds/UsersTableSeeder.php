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
        DB::table('users')->truncate();

        $user = [
            'name' => 'admin', 'email' => 'admin@example.com', 'password' => bcrypt('admin'),
        ];

        DB::table('users')->insert($user);
    }
}
