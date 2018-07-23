
var task_types = ['TODO','DOING','DONE'];

$(function () {

	//если не страница задание, не выполнять скрипт
	if(window.location.href.indexOf('tasks') < 0) return;

	function load_tasks(type){
		$.ajax({
		    type: 'GET',
		    url: '/get_tasks/' + type,
		    success: function (data) {
		    	//console.log(data);
		    	if(data.error == 0){
			    	if(data.data.length != 0){
			    		var html = '';
			    		//console.log(tasks);
			    		data.data.forEach(function(o){
			    			html += '<p>[' + o.created_at + '] <span class="task_in_list" task_id=' 
			    						   + o.id + '>' + o.name + ' (' + o.num_comments + ')</span></p>';
			    		});
			    		$('#' + type.toLowerCase()).html(html);
			    	}
		    	}else{
		    		alert('Ошибка получения данных');
		    	}
		    },
		    error: function (data, status, xhr) {
		    	console.log(data);
		    }
		});
	};

	function load_all_tasks(){
		task_types.forEach(function(o){
			load_tasks(o);
		})
	}


	function save_task(id){
		var data = {};
		if(id == 0){
			data.name = $('#task_name').val();
			data.description = $('#task_description').val();
			if(data.name.length == 0 || data.description.length == 0){
				alert('Заполните все поля');
				return;
			}
		}
		data.id = id;
		data.status = $('#task_status').val();
		data._token = $('input[name="_token"]').val();
		$.ajax({
		    type: 'POST',
		    url: '/save_task' ,
		    data: data,
		    //async: true,
		    success: function (data) {
		    	//console.log(data);
		    	if(data.error == 0){
		    		$('#shadow').hide();
					$('#task_window').hide();
					clearForm();
					load_all_tasks();
					setTimeout(function(){
						if(id){
							alert('Задание сохранено.');
						}else{
							alert('Новое задание сохранено.');
						}
					},50);
				}else{
		    		alert('Ошибка сохранения.');
		    	}
		    },
		    error: function (data, status, xhr) {
		    	alert('Ошибка сохранения.');
		    	//console.log(data);
		    }
		});
	}

	function load_task(id){
		$.ajax({
		    type: 'GET',
		    url: '/get_task/' + id,
		    success: function (data) {
		    	//console.log(data);
		    	if(data.error == 0){
		    		$('#task_id').val(data.data.id);
	    			$('#task_name').val(data.data.name);
					$('#task_description').val(data.data.description);
					$('#task_status').val(data.data.status);
				}else{
		    		alert('Ошибка получения данных.');
		    	}
		    },
		    error: function (data, status, xhr) {
		    	alert('Ошибка получения данных..');
		    	//console.log(data);
		    }
		});
	}

	function load_comments(task_id){
		$.ajax({
		    type: 'GET',
		    url: '/get_comments/' + task_id,
		    success: function (data) {
		    	console.log(data);
		    	if(data.error == 0){
		    		html = '';
		    		if(data.data.length != 0){
		    			data.data.forEach(function(o){
		    				html+= '<div class="t_comment">' +
								    	'<p class="comment_date">'+ o.created_at + '</p>' +
								        '<p class="comment_text"><b>' + o.name + ': </b>' + o.text + '</p>' +
								   '</div>';
		    			});
		    		}else{
		    			html+= '<div class="t_comment">' +
								    '<p class="comment_text">Комментариев пока нет...</p>' +
							   '</div>';
		    		}
		    		$('#comments_list').html(html);
				}else{
		    		alert('Ошибка получения данных.');
		    	}
		    },
		    error: function (data, status, xhr) {
		    	alert('Ошибка получения комментариев к задаче..');
		    	//console.log(data);
		    }
		});
	}

	function add_comment(task_id){
		var data = {};
		data.text = $('#new_comment_text').val();
		if(data.text.length == 0){
			alert('Введите текст.');
			return;
		}
		data._token = $('input[name="_token"]').val();
		$.ajax({
		    type: 'POST',
		    url: '/add_comment/' + task_id,
		    data: data,
		    success: function (data) {
		    	console.log(data);
		    	if(data.error == 0){
		    		$('#new_comment_text').val('');
		    		load_comments(task_id);
		    		load_all_tasks();
		    		//alert('Комментарий добавлен');
				}else{
		    		alert('Ошибка добавления комментария.');
		    	}
		    },
		    error: function (data, status, xhr) {
		    	alert('Ошибка получения комментариев к задаче..');
		    	//console.log(data);
		    }
		});
	}

	function displayTask(id){
		clearForm();
		if(id != 0){
			$('#task_window_header').text('Редактирование задачи');
			$('#save_task').text('Сохранить');
			$("#task_name, #task_description").prop('disabled', true);
			load_task(id);
			load_comments(id);
			$('#task_comments').show();
		}else{
			$('#task_window_header').text('Создание задачи');
			$('#save_task').text('Создать');
			$("#task_name, #task_description").prop('disabled', false);
		}
		$('#shadow').show();
		$('#task_window').show();
	}

	function clearForm(){
		$('#task_id').val('0');
		$('#task_name').val('');
		$('#task_description').val('');
		$('#task_status').val('TODO');
		$('#task_comments').hide();
		$('#task_window').animate({ scrollTop: 0 }, 1);
		$('#comments_list').text('');
		//$('#task_window').scrollTop(0);
	}



	load_all_tasks();

	$('#show_task_window').click(function(){
		displayTask(0);
	})
	$('#shadow, #exit_task').click(function(){
		$('#shadow').hide();
		$('#task_window').hide();
		clearForm();
	})
	$('#save_task').click(function(){
		save_task( parseInt($('#task_id').val()) );
	})

	//Открыть задачу из списка
	$('.tasks-list').on('click', '.task_in_list', function(){
		//console.log($(this).attr('task_id'));
		displayTask(parseInt($(this).attr('task_id')));
	});

	//Отправить коммент на сохранение
	$('#add_comment').click(function(){
		add_comment( parseInt($('#task_id').val()) );
	})
});