<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'test',
          'email' => 'test@email.com',
          'password' => bcrypt('test123'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
