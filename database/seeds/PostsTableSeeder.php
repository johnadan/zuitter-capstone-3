<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'Hello Tuitt!',
                'user_id' => 2,
                'created_at' => '2019-02-11 09:58:32',
                'updated_at' => '2019-02-11 09:58:32',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'Hi Tuitt!',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:38:36',
                'updated_at' => '2019-02-11 10:38:36',
            ),
            2 => 
            array (
                'id' => 3,
                'content' => 'hi tuitt',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:40:41',
                'updated_at' => '2019-02-11 10:40:41',
            ),
            3 => 
            array (
                'id' => 4,
                'content' => 'hello',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:41:06',
                'updated_at' => '2019-02-11 10:41:06',
            ),
            4 => 
            array (
                'id' => 5,
                'content' => 'Welcome to TuittER!',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:41:44',
                'updated_at' => '2019-02-11 10:41:44',
            ),
            5 => 
            array (
                'id' => 6,
                'content' => 'Tuitt Bootcamp',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:55:51',
                'updated_at' => '2019-02-11 10:55:51',
            ),
            6 => 
            array (
                'id' => 7,
                'content' => 'Tuitt Coding Bootcamp PH',
                'user_id' => 2,
                'created_at' => '2019-02-11 10:55:58',
                'updated_at' => '2019-02-11 10:55:58',
            ),
            7 => 
            array (
                'id' => 8,
                'content' => 'hello',
                'user_id' => 2,
                'created_at' => '2019-02-11 11:04:59',
                'updated_at' => '2019-02-11 11:04:59',
            ),
            8 => 
            array (
                'id' => 9,
                'content' => 'Code pa more!',
                'user_id' => 3,
                'created_at' => '2019-02-11 11:50:04',
                'updated_at' => '2019-02-11 11:50:04',
            ),
            9 => 
            array (
                'id' => 10,
                'content' => 'Buhay Tuitt',
                'user_id' => 3,
                'created_at' => '2019-02-11 11:55:34',
                'updated_at' => '2019-02-11 11:55:34',
            ),
            10 => 
            array (
                'id' => 11,
                'content' => 'Laravel',
                'user_id' => 3,
                'created_at' => '2019-02-11 12:03:01',
                'updated_at' => '2019-02-11 12:03:01',
            ),
            11 => 
            array (
                'id' => 12,
                'content' => 'HTML',
                'user_id' => 3,
                'created_at' => '2019-02-11 12:05:10',
                'updated_at' => '2019-02-11 12:05:10',
            ),
            12 => 
            array (
                'id' => 13,
                'content' => 'CSS',
                'user_id' => 1,
                'created_at' => '2019-02-11 12:21:48',
                'updated_at' => '2019-02-11 12:21:48',
            ),
            13 => 
            array (
                'id' => 14,
                'content' => 'JavaScript',
                'user_id' => 2,
                'created_at' => '2019-02-11 12:25:06',
                'updated_at' => '2019-02-11 12:25:06',
            ),
            14 => 
            array (
                'id' => 15,
                'content' => 'PHP',
                'user_id' => 2,
                'created_at' => '2019-02-11 12:27:15',
                'updated_at' => '2019-02-11 12:27:15',
            ),
            15 => 
            array (
                'id' => 16,
                'content' => 'Tuitt tuitt!',
                'user_id' => 2,
                'created_at' => '2019-02-13 10:47:47',
                'updated_at' => '2019-02-13 10:47:47',
            ),
            16 => 
            array (
                'id' => 17,
                'content' => 'Tuitt and TuittER!',
                'user_id' => 2,
                'created_at' => '2019-02-13 10:53:00',
                'updated_at' => '2019-02-13 10:53:00',
            ),
            17 => 
            array (
                'id' => 18,
                'content' => 'Capstone 3',
                'user_id' => 2,
                'created_at' => '2019-02-13 12:00:25',
                'updated_at' => '2019-02-13 12:00:25',
            ),
            18 => 
            array (
                'id' => 19,
                'content' => 'This is a professional social media network for Tuitt Coding Bootcamp students and alumnis! Welcome!',
                'user_id' => 2,
                'created_at' => '2019-02-13 12:20:49',
                'updated_at' => '2019-02-13 12:20:49',
            ),
            19 => 
            array (
                'id' => 20,
                'content' => 'HTML CSS Bootstrap Javascript PHP AJAX JSON JQuery Laravel Sublime Git Browser',
                'user_id' => 2,
                'created_at' => '2019-02-13 12:30:31',
                'updated_at' => '2019-02-13 12:30:31',
            ),
            20 => 
            array (
                'id' => 21,
                'content' => 'HTML CSS Bootstrap Javascript PHP AJAX JSON JQuery Laravel Sublime Git Browser',
                'user_id' => 2,
                'created_at' => '2019-02-13 12:30:50',
                'updated_at' => '2019-02-13 12:30:50',
            ),
            21 => 
            array (
                'id' => 22,
            'content' => 'Hello! This is your yours truly, your admin! :)',
            'user_id' => 1,
            'created_at' => '2019-02-13 13:01:54',
            'updated_at' => '2019-02-13 13:01:54',
        ),
        22 => 
        array (
            'id' => 23,
            'content' => 'Graduation na! Congrats Batch 16 B6NC class!',
            'user_id' => 2,
            'created_at' => '2019-02-21 10:48:55',
            'updated_at' => '2019-02-21 10:48:55',
        ),
        23 => 
        array (
            'id' => 24,
            'content' => 'test',
            'user_id' => 2,
            'created_at' => '2019-02-21 10:51:46',
            'updated_at' => '2019-02-21 10:51:46',
        ),
        24 => 
        array (
            'id' => 25,
            'content' => 'hello world',
            'user_id' => 2,
            'created_at' => '2019-02-21 10:52:05',
            'updated_at' => '2019-02-21 10:52:05',
        ),
        25 => 
        array (
            'id' => 26,
            'content' => 'testing',
            'user_id' => 2,
            'created_at' => '2019-02-21 10:53:19',
            'updated_at' => '2019-02-21 10:53:19',
        ),
        26 => 
        array (
            'id' => 27,
            'content' => 'sample',
            'user_id' => 2,
            'created_at' => '2019-02-21 10:53:51',
            'updated_at' => '2019-02-21 10:53:51',
        ),
        27 => 
        array (
            'id' => 28,
            'content' => 'hi hello',
            'user_id' => 3,
            'created_at' => '2019-02-21 11:08:45',
            'updated_at' => '2019-02-21 11:08:45',
        ),
    ));
        
        
    }
}