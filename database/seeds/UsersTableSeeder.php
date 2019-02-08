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
                'firstname' => 'admin',
                'lastname' => 'admin',
                'username' => 'admin',
                'email' => 'admin_admin@admin.admin',
                'password' => '$2y$10$yB6gqsIrvPyCS9NA/8vkeeL3RBZrLFH0.sp/VvUqJO2KmTahgwhru', //adminadmin
                'isAdmin' => 0,
                'remember_token' => 'a88Ox1jCJYpjStWp04kee4LiCA3VlOozo2KEsnBV3Iq3h6tU6p5Gw1YG17im',
                'created_at' => '2019-02-06 11:27:47',
                'updated_at' => '2019-02-06 11:27:47',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'user',
                'lastname' => 'user',
                'username' => 'user',
                'email' => 'user_user@user.user',
                'password' => '$2y$10$nryYDQsqDXVT8AGETGHOyeP7TY/m0o5X2s18F7YyJS5gOWv8xX7PS', //useruser
                'isAdmin' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 09:45:31',
                'updated_at' => '2019-02-08 09:45:31',
            ),
        ));
        
        
    }
}