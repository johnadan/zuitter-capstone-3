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
                'password' => '$2y$10$yB6gqsIrvPyCS9NA/8vkeeL3RBZrLFH0.sp/VvUqJO2KmTahgwhru',
                'isAdmin' => 0,
                'remember_token' => 'k9IwG1mcqE1fST0yMluWcWIrE2iGaEPTrKqnqMWV8xS5vgRMHq933WQdaq4d', //adminadmin
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
                'password' => '$2y$10$nryYDQsqDXVT8AGETGHOyeP7TY/m0o5X2s18F7YyJS5gOWv8xX7PS',
                'isAdmin' => 0,
                'remember_token' => '9n0MZp4g77kFq8rqg3oWJLeIpTu0ov8bOncfoklDIt60roUJEl5YBvPHX2ZG', //useruser
                'created_at' => '2019-02-08 09:45:31',
                'updated_at' => '2019-02-08 09:45:31',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'first name',
                'lastname' => 'last name',
                'username' => 'username',
                'email' => 'firstname_lastname@fullname.name',
                'password' => '$2y$10$UNp4z0IT/2vru1wT2XdIzeuSTO6PY4D320dWGhQBvYxnrtQQLlbke',
                'isAdmin' => 0,
                'remember_token' => 'R6hDSYLAnlHa5XQOaBaLHKFyejkhAnFbR3bk6JkEhq4qNzqTNWt9Yq1z5Hst', //username
                'created_at' => '2019-02-10 11:48:09',
                'updated_at' => '2019-02-10 11:48:09',
            ),
        ));
        
        
    }
}