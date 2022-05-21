<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        //Inser 10 users data in table
        User::create([
            'name' => 'jeetendra',
            'email' => 'jeetendr@gmail.com',
            'password' => bcrypt('password')
        ]);

        Contact::create([
            'user_id' => 1,
            'address' => 'Ahmedabad,gujarat',
            'phone_no' => '9722721834',
        ]);
        
    }
}
