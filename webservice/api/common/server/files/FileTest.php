<?
require_once ('File.php');

   $test = new FileTest();
   $strr = $test->ExcecTest();
   echo $strr;

class FileTest
{
    const _fileNames = "class.php";
    const _filePath = "files";

    function __construct()
    {
       //
    }

    function ExcecTest()
    {
        $file = new File($this::_filePath."/".$this::_fileNames);

        $file->Create();
        
        return "This is the file test to create ".constant("FileTest::_filePath")."/".constant("FileTest::_fileNames");
    }

}

?>