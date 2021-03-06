<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//DB::table('tasks')->truncate();
        //Seeder for users
    	DB::table('users')->insert([
    				['name' => 'Jax',
					 'email' => 'jax_fd@mail.ru',
					 'password' => "\$2y\$10\$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92", //123456
					 'created_at' => '2018-07-18 23:00'
					],
					['name' => 'Arnold',
					 'email' => 'look@at.me',
					 'password' => "\$2y\$10\$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92", //123456
					 'created_at' => '2018-07-18 23:00'
					],
					['name' => 'John',
					 'email' => 'what@a.day',
					 'password' => "\$2y\$10\$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92", //123456
					 'created_at' => '2018-07-18 23:00'
					],
					['name' => 'Sarah',
					 'email' => 'connor@sky.net',
					 'password' => "\$2y\$10\$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92", //123456
					 'created_at' => '2018-07-18 23:00'
					],
					['name' => 'Kyle',
					 'email' => 'kyle@sky.net',
					 'password' => "\$2y\$10\$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92", //123456
					 'created_at' => '2018-07-18 23:00'
					],
        		]);
    	//Seeder for tasks
        DB::table('tasks')->insert([
					['name' => 'Task 1',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'TODO',
					 'created_at' => '2018-07-18 14:00'
					],
					['name' => 'Task 2',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'DOING',
					 'created_at' => '2018-07-18 15:00'
					],
					['name' => 'Task 3',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'DONE',
					 'created_at' => '2018-07-18 16:00'
					],
					['name' => 'Task 4',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'TODO',
					 'created_at' => '2018-07-21 17:00'
					],
					['name' => 'Task 5',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'DONE',
					 'created_at' => '2018-07-19 10:00'
					],
					['name' => 'Task 6',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'DOING',
					 'created_at' => '2018-07-18 15:00'
					],
					['name' => 'Task 7',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'TODO',
					 'created_at' => '2018-07-20 15:00'
					],
					['name' => 'Task 8',
					 'description' => "Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...",
					 'status' => 'TODO',
					 'created_at' => '2018-07-20 14:00'
					],
				]);
        //Seeder for comments     	
       	DB::table('comments')->insert([
					['user_id' => 1,
					 'task_id' => 1,
					 'text' => "Some comment...1",
					 'created_at' => '2018-07-18 14:00'
					],
					['user_id' => 2,
					 'task_id' => 2,
					 'text' => "Some comment...2",
					 'created_at' => '2018-07-19 15:00'
					],
					['user_id' => 3,
					 'task_id' => 1,
					 'text' => "Some comment...3",
					 'created_at' => '2018-07-20 10:00'
					],
					['user_id' => 3,
					 'task_id' => 3,
					 'text' => "Some comment...4",
					 'created_at' => '2018-07-17 14:00'
					],
					['user_id' => 4,
					 'task_id' => 1,
					 'text' => "Some comment...5",
					 'created_at' => '2018-07-21 11:00'
					],
					['user_id' => 1,
					 'task_id' => 2,
					 'text' => "Some comment...6",
					 'created_at' => '2018-07-20 09:00'
					],
					['user_id' => 3,
					 'task_id' => 4,
					 'text' => "Some comment...7",
					 'created_at' => '2018-07-22 23:59'
					],
				]);
    }
}
