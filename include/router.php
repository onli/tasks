<?php

namespace onli\tasks;


class Router {
	
	
	function servePage() {	
		# TODO: Insert templating layer here	
		switch($_REQUEST['page']) {
			case 'create':
				echo '<form action="?page=do_create" method="POST">
					<label for="title">Titel</label>
					<input name="title" />
					<label for="description">Beschreibung</label>
					<textarea name="descrition"></textarea>
					<label for="target_date">Zieldatum</label>
					<input name="target_date" type="date" />
					<label for="category">Kategorie</label>
					<input name="category" />
					<label for="priority">Wichtigkeit</label>
					<input name="priority" type="number" min=0 max=5 />
					<button>Speichern</button>
				</form>
				';
				break;
			
			default:
				echo '<a href="?page=create">New Tasks</a>';
				break;
		}
		
		
	}
	
}
