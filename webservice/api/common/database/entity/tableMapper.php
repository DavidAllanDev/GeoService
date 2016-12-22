<?
require_once '../query.php';
require_once 'columnMapper.php';

class tableMapper
{
    const _sql = "SHOW TABLES";
    private $_resutl;
    private $_query;
    private $_tableName;
    
    function __construct()
    {
        $this->_query = new query();
        $this->_resutl = $this->_query->GetResult($this::_sql);        
    }
    
    function GetTableList()
    {   
        while($_row = $this->_resutl->fetch_array(MYSQLI_BOTH))
        {
		    $this->_tableName = $_row[0];
		    echo "$this->_tableName  <BR> ";      
        }
    }
    
   function GetDetailedTableList()
    {   
        while($_row = $this->_resutl->fetch_array(MYSQLI_BOTH))
        {
		    $this->_tableName = $_row[0];
		    echo "$this->_tableName  <BR> ";   
            
	        $columnMapp = new columnMapper($this->_tableName);
	        $columnMapp->GetColumnList();
        }
    }

}
	  
?>