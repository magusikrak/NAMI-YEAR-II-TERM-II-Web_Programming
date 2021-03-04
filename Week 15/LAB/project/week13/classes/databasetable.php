<?php
class DatabaseTable{
	public $table;
	public function __construct($table){
		$this->table = $table;
	}
	function save($record, $pk = ''){
	    try{
	        $this->insert($record);
	    }
	    catch(Exception $e){
	        $this->update($record, $pk);
	    }
	}
	function insert($record) {
	    global $pdo;
	    $keys = array_keys($record);
	    $keysWC = implode(', ', $keys);
	    $keysWCAC = implode(', :', $keys);
	    $query = "INSERT INTO $this->table($keysWC) VALUES(:$keysWCAC)";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	}
	function update($record, $pk){
	    global $pdo;
	    $para = [];
	    foreach ($record as $key => $value) {
	        $para[] = $key . ' = :' . $key;
	    }
	    $paraList = implode(', ', $para);
	    $query = "UPDATE $this->table SET $paraList WHERE $pk = :pk";
	    $record['pk'] = $record[$pk];
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	}
	function find($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
	function findAll() {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table");
	    $stmt->execute();
	    return $stmt;
	}
	function delete($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
}