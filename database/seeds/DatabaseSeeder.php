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
        // $this->call(UsersTableSeeder::class);

        //Seeder for tasks
        //DB::table('tasks')->truncate();
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
       
    }
}
