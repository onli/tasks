<?php

namespace onli\tasks;


class Router {
	
	
	function servePage() {	
		# TODO: Insert templating layer here	
		switch($_REQUEST['page']) {
			case 'create':
			
				$timestamp = time() + (60 * 60 * 24 * 7);
				$date = date( "Y-m-d", $timestamp );

				echo '<form action="?page=do_create" method="POST">
					<label for="title">Titel</label>
					<input name="title" />
					<label for="description">Beschreibung</label>
					<textarea name="descrition"></textarea>
					<label for="target_date">Zieldatum</label>
					<input name="target_date" type="date" value="' . $date . '" />
					<label for="category">Kategorie</label>
					<input name="category" />
					<label for="priority">Wichtigkeit</label>
					<input name="priority" type="number" min=0 max=5 />
					<button>Speichern</button>
				</form>
				';
				break;
			
			case 'do_create':
				$db = Database::getInstance();
				$db->createTask($_POST['title'], $_POST['description'], $_POST['target_date'], $_POST['category'], $_POST['priority']);  
				
				header("Location: /tasks");
				die();
			
			default:
				echo '<a href="?page=create">New Tasks</a>';
				break;
		}
		
		
	}
	
}
