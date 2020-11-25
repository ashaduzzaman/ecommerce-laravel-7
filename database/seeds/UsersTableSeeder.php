<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'ashaduzzaman',
                'email' => 'ashad@myolbd.com',
                'avatar' => 'users\\November2020\\SMSwN96hjapnkkIS7mjX.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gIDNJ5dBjmWTnLu.wb0gv.f1CMin7ITUwRakLfGzb/CflLQuCNgii',
                'remember_token' => 'YnfAKAkI7dbeJhxT0thMbG1f4ZZc2JuaOlfjgroaLGU7iGw51iuVbglx9hxp',
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-11-21 11:28:36',
                'updated_at' => '2020-11-22 05:18:01',
            ),
        ));
        
        
    }
}