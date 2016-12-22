<?
require_once 'ientity.php';

class entity extends query implements ientity
{
    public $_tableName;
    public $_sql = "select * from ";
    public $_delete_sql = "delete from ";
    public $_update_sql = "update ";
    public $_insert_sql = "insert into ";
    public $_truncate_sql = "truncate table ";

    public function __construct($table)
    {
        $this->_tableName = $table;
    }

    public function GetItem($key,$ItemCode)
    {
        $condition = " where $key = $ItemCode";
        return $this->GetResult($this->_sql . $this->_tableName . $condition);
    }

    public function RemoveItem($key,$ItemCode)
    {
        $condition = " where $key = $ItemCode";
        return $this->SetValue($this->_delete_sql . $this->_tableName . $condition);
    }

    public function UpdateItem($key,$ItemCode, $fieldList)
    {
        $condition = " where $key = $ItemCode";
        return $this->SetValue($this->_update_sql . $this->_tableName ." set ".$fieldList." ". $condition);
    }

    public function InsertItem($fieldList)
    {
        return $this->SetValue($this->_insert_sql . $this->_tableName ." values ".$fieldList);
    }

    public function InsertId($fieldList)
    {
        return $this->SetInsertID($this->_insert_sql . $this->_tableName ." values ".$fieldList);
    }

    public function GetItemList($order = "", $limit=0)
    {
        if ($order!="")
        {
            $orderByInstruction = " ORDER BY ".$order;
        }

        if($limit>0)
        {
            $LimitInstruction = " limit ".$limit;
        }

        $get_sql_Command_ = $this->_sql . $this->_tableName.$orderByInstruction.$LimitInstruction;

        return $this->GetResult($get_sql_Command_);      
    }

    public function Clean()
    {        
        return $this->SetValue($this->_truncate_sql . $this->_tableName);
    }
}
?>