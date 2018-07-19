<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;

class TasksController extends Controller
{
	public function show(Request $request){
		//echo "test";
		if(view()->exists('tasks')){
			return view('tasks');
		}
		abort(404);
	}
	
	public function get_tasks(Request $request, $type){

		$tasks = Task::where('status', $type)
               ->orderBy('created_at', 'asc')
               //->take(10)
               ->get();
       
        $tasks_ = $tasks->toArray();
        foreach ($tasks_ as $key => &$val){
        	$val['created_at'] = date('d.m.y H:i', strtotime($val['created_at']));
        	//echo $val['created_at'] . ' - ' . $form_time . '<br>';
        }
        return response()->json(['error' => '0', 'data' => $tasks_]);
            
        //$tasks_ = $tasks->toJson();
        //$tasks_ = 
        //echo '<pre>';
        //return var_dump($tasks_);
        //return $tasks_->toJson();
		//return $type;
	}

	public function get_task(Request $request, $id){

		$task = Task::where('id', $id)->get();
       
        $task_ = $task->toArray();
       
        return response()->json(['error' => '0', 'data' => $task_[0]]);
	}

	public function save_task(Request $request){
		$id = $request->id;
		if($id != 0){
			$task = Task::where('id', $id)->first();
		}else{
			$task = new Task;
			$task->name = $request->name;
        	$task->description = $request->description;
		}

        $task->status = $request->status;

        $task->save();
		return response()->json(['error' => '0']);
	}

}
