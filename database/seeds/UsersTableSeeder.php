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
        //
        $user =App\User::create([

        	'name'=>'abdallah',
        	'email'=>'abdallahkhalid@hotmail.com',
        	'password'=>bcrypt('password'),
        	'admin'=>1,

        ]);

        App\Profile::create([
        	'user_id'=>$user->id,
        	'avatar'=>'uploads/avatar/avatar.jpg',
        	'facebook'=>'https://www.facebook.com/profile.php?id=100008350963105',
        	'youtube'=>'https://www.youtube.com/watch?v=Qbp_aixfb-w&index=15&list=RD-KxZFCg647I',
        	'about'=>'this is test about',

        ]);
    }
}
