<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['name'=>'nguyen thi thoa',
        		'email'=>'nguyenthithoa@gmail.com',
        	'password'=>bcrypt('123456')

        	],
        	['name'=>'Admin',
        		'email'=>'admin@gmail.com',
        	'password'=>bcrypt('123456')

        	],
        ];
        DB::table('users')->insert($data);
    }
}
