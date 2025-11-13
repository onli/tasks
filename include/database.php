<?php

namespace onli\tasks;


use \PDO;


class Database {

	private $db; 

	function __construct() {
		$this->db = new PDO('sqlite:tasks.db','', '');
	}

	function setupDB() {
	
	
		$query = 'CREATE TABLE IF NOT EXISTS users (id integer PRIMARY KEY AUTOINCREMENT, name TEXT, role TEXT, email TEXT)'; 
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$query = 'CREATE TABLE IF NOT EXISTS tasks (id integer PRIMARY KEY AUTOINCREMENT, title TEXT, description TEXT, creation_date NUMERIC, target_date NUMERIC, category TEXT, priority INTEGER, owner INTEGER)'; 
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	}
}
