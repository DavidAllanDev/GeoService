<?
// By David Allan
require_once 'connectionData.php';

class Connection
{

	private $_user;
	private $_passWord;
	private $_dataBaseName;
	private $_server;
	private $_myiConnect;
	private $_connectionData;

	function __construct()
	{
		$this->_connectionData = new ConnectionData;
		$this->_user 		 = $this->_connectionData->User();
		$this->_passWord	 = $this->_connectionData->PassWord();
		$this->_dataBaseName = $this->_connectionData->DataBaseName();
		$this->_server		 = $this->_connectionData->Server();
	}
	
	function open($defaultCharSet = 'utf8')
	{
		$this->_myiConnect = mysqli_connect($this->_server, $this->_user, $this->_passWord, $this->_dataBaseName);
		
		mysqli_set_charset($this->_myiConnect,$defaultCharSet);
		
		if (!$this->_myiConnect) {
			echo "Error: Unable to connect";
			exit;
		}
	}

	function close()
	{
		mysqli_close($this->_myiConnect);
	}
	
	function query($sql)
	{ 
		return 	mysqli_query($this->_myiConnect, $sql, MYSQLI_STORE_RESULT);	
	}

	function exec($sql)
	{
		return 	mysqli_query($this->_myiConnect, $sql, MYSQLI_USE_RESULT); 
	}

	public function DataBaseName()
	{
		return $this->_connectionData->DataBaseName();
	}
}
?>
