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
	
	function createTask($title, $description, $targetDate, $category, $priority = 0) {
		$targetDateEpoch = strtotime($targetDate);
		
		$query = 'INSERT INTO tasks(title, description, creation_date, target_date, category, priority, owner) VALUES(?, ?, ?, ?, ?, ?, 0)';
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(1, $title); 
		$stmt->bindParam(2, $description); 
		$stmt->bindParam(3, time()); 
		$stmt->bindParam(4, $targetDateEpoch); 
		$stmt->bindParam(5, $category); 
		$stmt->bindParam(6, $priority); 
		// $stmt->bindParam(7, 0);  // # TODO: Link to user currently logged in
		$stmt->execute();
	}
}
