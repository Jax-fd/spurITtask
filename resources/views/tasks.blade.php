@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-12"> <!-- col-md-offset-1 -->
            <div class="panel panel-default">
                <div class="panel-heading">Список задач</div>

                <div class="panel-body pp-block">
					<div class="col-md-4">
						<div class="tasks-header">TO DO</div>
						<div id="todo" class='tasks-list'></div>
					</div>
					<div class="col-md-4">
						<div class="tasks-header">DOING</div>
						<div id="doing" class='tasks-list'></div>
					</div>
					<div class="col-md-4">
						<div class="tasks-header">DONE</div>
						<div id="done" class='tasks-list'></div>
					</div>
                </div>
                <div class="btn-box">
                	<a id="show_task_window" class="btn btn-primary btn-block btn-p">
						СОЗДАТЬ ЗАДАЧУ
					</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="shadow">
</div>
<div id="task_window">
	<div id="task_window_header" class="panel-heading">Создание задачи</div>
	<div class="col-md-12 task_form">
		<form>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" id="task_id" value="0"><br><br>
			<label for="task_name">Название:</label><input type="text" id="task_name" valid-type="title"><br><br>
			<label for="task_description">Описание:</label><br><textarea id="task_description"></textarea><br><br>
			<label for="task_status">Статус:</label>
			<select id="task_status">
			  <option value="TODO">TODO</option>
			  <option value="DOING">DOING</option>
			  <option value="DONE">DONE</option>
			</select><br><br>
			<a id="save_task" class="btn btn-primary btn-p">
				Создать
			</a>
			<a id="exit_task" class="btn btn-primary btn-p btn-cancel">
				Отмена
			</a>
		</form>
	</div>
</div>
@endsection
