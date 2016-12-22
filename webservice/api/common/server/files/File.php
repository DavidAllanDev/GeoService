<?
class File
{
    private $_stream;
    private $_filename;
    
    function __construct($fileName)
    {
        $this->_filename = $fileName;    
    }

    function Create()
    {
        touch($this->_filename);

        put_file_contents();
    }     
}
?>