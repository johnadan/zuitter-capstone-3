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
                'username' => 'admin_user',
                'email' => 'admin_admin@admin.admin',
                'password' => '$2y$10$C88VqU38lJfmYqrKxyk01.WS39Y192VcgWd5L6PCndVv/nCpYwhmG', //adminu
                'isAdmin' => 1,
                'remember_token' => 'beYtOXidgrT6tAyEpwMv19XsHu7HHDqT3j8e8nO3Ob5ey4541xuUc8YCtNlc',
                'created_at' => '2019-02-02 20:40:42',
                'updated_at' => '2019-02-02 20:40:42',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'user',
                'lastname' => 'user',
                'username' => 'user',
                'email' => 'user_user@user.user',
                'password' => '$2y$10$esu4eGRAVu2oUwRDCLvYVukqnEwFoCnFVeWF9QZlJodRNxwlQH7hy', //useruser
                'isAdmin' => 0,
                'remember_token' => 'h5UwIcY4isMXOSxsTzJzx7Hh5AFfyEVS800O4xOI65fkb7PEXZVecgQAgh85',
                'created_at' => '2019-02-03 12:25:12',
                'updated_at' => '2019-02-03 12:25:12',
            ),
        ));
        
        
    }
}