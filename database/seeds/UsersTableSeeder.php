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
            'titre' => 'M.',
            'poste' => 'Administrateur Web',
            'name'  => 'Djibril NDIAYE',
            'adresse'   => 'Ouakam, Cite Comico',
            'pays'  => 'SN',
            'region'    => 'DK',
            'role'  => 'admin',
            'telephone' => '00000000',
            'email' => 'admin@dirpharm.com',
            'password' => 'Password#191',
            'active'    => '1'
        ];



        	User::create($user);


    }
}
