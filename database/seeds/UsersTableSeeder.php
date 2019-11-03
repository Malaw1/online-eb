<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [

            'name'  => 'Name',
            'adresse'   => 'Adresse',
            'email' => 'exemple@email.com',
            'password' => 'Password',
            'active'    => '1'
        ];



        	User::create($user);


    }
}
