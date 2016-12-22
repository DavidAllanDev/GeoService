<?
require_once '../query.php'; 

class columnMapper
{
	private $_sql;
	private $_tableName;
    private $_resutl;
    private $_query;
	
	function __construct($table)
	{
		$this->_tableName = $table;
		$this->_sql = "SHOW COLUMNS FROM $this->_tableName";	
		
		$this->_query = new query();
        $this->_resutl = $this->_query->GetResult($this->_sql);
	}
	
	function GetColumnList()
	{
        while($_row = $this->_resutl->fetch_array(MYSQLI_BOTH))
        {
			$nome_coluna = $_row[0];
			$tipo_coluna = $_row[1];	
			echo "$nome_coluna <-> $tipo_coluna   <BR>";
			    
        }
	}

	function GetAttributeList()
	{
		$result = " ";
        while($_row = $this->_resutl->fetch_array(MYSQLI_BOTH))
        {
			$nome_coluna = $_row[0];
			$tipo_coluna = $_row[1];	
			$result = "private $tipo_coluna $nome_coluna   /n";
			    
        }
		return $result;
	}	
}

?>