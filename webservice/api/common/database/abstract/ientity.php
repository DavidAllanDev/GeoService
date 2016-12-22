<?
interface ientity
{
    public function GetItem($key,$ItemCode);
    public function RemoveItem($key,$ItemCode);
    public function UpdateItem($key,$ItemCode, $fieldList);
    public function InsertItem($fieldList);
    public function InsertId($fieldList);
    public function GetItemList();
}
?>