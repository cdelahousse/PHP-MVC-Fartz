<?php


class driver_pdo extends library_database{
    
    private $stmt;


	//Connect to DB with default or custom settings
	//TODO SET UP TO CONNECT WITH CUSTOM SETTINGS
    public function connect()    {

		$db_info_string = $this->_db_info[0]. ':host=' . $this->_db_info[1] . ';';
		$db_info_string .= 'dbname='. $this->_db_info[4]; 

		try {
			$this->_db = new pdo($db_info_string,  $this->_db_info[2],  $this->_db_info[3] );

		//set Error mode to send out exceptions
		$this->_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

		} catch (PDOException $e) {
			//TODO Custom error reporting
			echo $e->getMessage();
		}

		//TODO ATTEMPT TO CONNECT, IF PDO OBJECT CANNOT BE CREATED, return 
		//false and use custome error reporting
		//TRY, CATCH that jazz tooo
		
		//Returns the object so that it can be chained
		return $this;
    }


	public function prepare($query_string){
		$this->stmt = $this->_db->prepare($query_string);
		
		return $this;
	} 

    public function execute($values = array()){
		try { 
			$this->stmt->execute($values);
		} catch (PDOException $e) {
			_b($e->getMessage());
		}
		return $this;
	}

    public function fetch($data_type = 'array'){

		#What type of data would you like to return
		switch ($data_type) {
		case 'row_array':
			$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
			break;
		case 'object':
			$this->stmt->setFetchMode(PDO::FETCH_OBJ);
			break;
		//Grabs all the rows and sticks them into a big array
		case 'array':
			$array = array();
			$this->stmt->setFetchMode(PDO::FETCH_ASSOC);
			while ($row = $this->stmt->fetch()){
				$array[] = $row;
			}
			if ($this->stmt->rowCount() == 0) return FALSE;
			else return $array;
		}

		if ($this->stmt->rowCount() == 0) return FALSE;
		else return $this->stmt->fetch();
	}

	//Terminate the database connection
	public function disconnect(){
	
	//TODO: Custom Error reporting
	try {
		
			$this->_db = NULL;
			}
	catch(PDOException $e) {
			//xxx Custom Error thingy!!!
			_b($e->getMessage());
		}
				
	}



}
