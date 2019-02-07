<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'testuser',
            'email' => 'test@example.com.',
            'password'=>'121212'
        ];

        DB::table('users')->insert($param);
    }
}
