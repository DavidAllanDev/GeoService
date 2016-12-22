<?
require_once 'tableMapper.php';
require_once '../../server/files/File.php';

	try
	{
		$tableMapp = new tableMapper();
		$tableMapp->GetDetailedTableList();

		$fileName ="className.php";
        $file = new File($fileName);
        
	}
	catch (Exception $e) 
	{
    	echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	}
?>