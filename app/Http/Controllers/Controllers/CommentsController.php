<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comment;
use DB;
use Auth;

class CommentsController extends Controller
{
	public function get_task_comments(Request $request, $task_id){
		
		$comments = DB::table('comments')->where('task_id', '=', $task_id)
										 ->join('users', 'comments.user_id', '=', 'users.id')
                                         ->select('comments.*', 'users.name')
                                         ->orderBy('created_at', 'asc')
										 ->get();
		return response()->json(['error' => '0', 'data' => $comments]);
		//echo $task_id;
		//$com = (array) $comments;
		//echo '<pre>';
		//dd($comments);
		//return var_dump($com);
	}

    public function add_comment(Request $request, $task_id){
        $user_id = Auth::user()->id;
        $comment = new Comment;
        $comment->text = strip_tags($request->text);
        $comment->user_id = $user_id;
        $comment->task_id = $task_id;
        $comment->save();
        return response()->json(['error' => '0']);
    }
}
