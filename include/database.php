<?php

namespace onli\tasks;


use \PDO;


class Database {

	private $db; 

	function __construct() {
		$this->db = new PDO('sqlite:tasks.db','', '');
	}

	function setupDB() {
	
	
		$query = 'CREATE TABLE IF NOT EXISTS users (id integer PRIMARY KEY, name TEXT, role TEXT, email TEXT)'; 
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	}
}
