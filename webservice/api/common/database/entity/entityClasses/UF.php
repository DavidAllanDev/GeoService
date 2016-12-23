<?
@include_once '../../query.php';
@include_once '../../abstract/entity.php';

class UF extends entity
{
    public $_tableName;

    public $_key = "CODIGO";

    public function __construct()
    {
	    $this->_tableName = get_class($this);;
    }

    public function Item($code)
    {
        return $this->GetItem($this->_key,$code);
    }

    public function Remove($code)
    {
        return $this->RemoveItem($this->_key,$code);
    }

    public function Update($code, $fieldList)
    {
        return $this->UpdateItem($this->_key,$code, $fieldList);
    }

    public function Insert($fieldList)
    {
        return $this->InsertItem($fieldList);
    }

    public function GetList()
    {
        return $this->GetItemList();
    }
}
?>