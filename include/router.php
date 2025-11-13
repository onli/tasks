<?php

namespace onli\tasks;


class Router {
	
	
	function servePage() {
		print_r($_REQUEST);
		
		switch($_REQUEST['page']) {
			
			default:
				echo 'tasks';
				break;
		}
		
		
	}
	
}
