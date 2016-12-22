<?
// By David Allan
require_once 'connection.php';

class query
{
	public $_connection;
	public $_resultSet;
	public $GetSql;
    public $_sql_last_insert_id = "select last_insert_id() as ID";

	function __construct()
	{

	}
	
	function GetResult($sql)
	{
		$this->GetSql = $sql;
		$this->_connection = new Connection;
		$this->_connection->open();
		$this->_resultSet = $this->_connection->query($sql);
		$this->_connection->close();
		return $this->_resultSet;
	}

	function SetValue($sql)
	{
		$this->GetSql = $sql;
		$this->_connection = new Connection;
		$this->_connection->open();
		$this->_resultSet = $this->_connection->exec($sql);
		$this->_connection->close();
		return true;
	}

	function SetInsertID($sql)
	{
		$this->GetSql = $sql;
		$this->_connection = new Connection;
		$this->_connection->open();
		$this->_connection->exec($sql);
		$return_ID = $this->GetLastID($this->_connection->query($this->_sql_last_insert_id));
		$this->_connection->close();
		return $return_ID;
	}

	public function Count()
	{
		return mysqli_num_rows($this->_resultSet);
	}
	
	public function Error()
	{
		return mysqli_error($this->_resultSet);
	}

	private function GetLastID($resultSet)
    {
        $ID_obj_result = mysqli_fetch_object($resultSet);
        return  $ID_obj_result->ID;
    }

	public function Prepare($sql)
	{
		if(is_array($sql)) 
        	return array_map(__METHOD__, $sql); 

    	if(!empty($sql) && is_string($sql)) 
		{ 
        	return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $sql); 
    	} 

    	return $sql; 
	}

	public function DBName()
	{
		$this->_connection = new Connection;
		return $this->_connection->DataBaseName();
	}
}
?>