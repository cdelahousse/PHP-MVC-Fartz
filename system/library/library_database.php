<?php
abstract class library_database{
	protected $_db;
	protected $_db_info;

	//TODO Clean DB VARIABLE order and what not
	public function __construct(
	$type = DB_TYPE, $host = DB_HOST,$user = DB_USER, 
	$pass = DB_PASS, $database = DB_NAME) {

		$this->_db_info = array($type, $host, $user, $pass, $database);


		//Connect by default
		$this->connect();
	}

		abstract protected function connect();
    abstract protected function prepare($query_string);
    abstract protected function execute();
    abstract protected function fetch($data_type = 'array');

		abstract protected function disconnect();
	

	//DISCONNECT AT DESTRUCTION
	public function __destruct(){
		$this->disconnect();
	}

	//xxx CONCRETE IMPLEMENTATION, this shouldn't be here!
	public function select_all($table, $data_type = 'array'){
		return $this->prepare("SELECT * from $table")->execute()->fetch($data_type);
	}

}
