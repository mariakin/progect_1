<?php

class DB{
	public $connect;

		    public function __construct($dsn, $db_user, $db_pass){
            $this->connect = new PDO($dsn, $db_user, $db_pass);
        }
	

	public function query($sql){
		$result = $this->connect->query($sql, PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}




}

?>