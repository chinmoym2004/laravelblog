<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Model\User::create([
            'id'=>1,
        	'email'=>'admin@example.com',
			'password'=>\Hash::make('admin123'),
			'name'=>'Admin'
        ]);
    }
}
