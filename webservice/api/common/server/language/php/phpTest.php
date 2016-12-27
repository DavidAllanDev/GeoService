<?
require_once 'php.php';
    $test = new phpTest();
    $test->ExecTest();

class phpTest
{
    private $_testClassName;

    function __construct()
    {
        //
    }

    function ExecTest()
    {
        $class = new phpClass("this","this.php");
        $class->SetContent();
    }


}

?>