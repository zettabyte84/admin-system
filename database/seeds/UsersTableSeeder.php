<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'ansari@ansari.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'type' => 'a',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DB::table('listing')->insert([
        //     'list_name' => 'Starbuck @ Mid Valley Megamall',
        //     'address' => 'Lingkaran Syed Putra, Mid Valley City',
        //     'latitude' => '3.117880',
        //     'longitude' => '101.676749',
        //     'submitter_id' => $user->id,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
