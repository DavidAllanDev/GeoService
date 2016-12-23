<?
require_once 'entity.php';

	try
	{
		$UF = new entity("UF");
    	//$_resultSet = $UF->GetList();
		$_resultSet = $UF->GetItem("CODIGO","2");


		//Use result
		while ($obj_result = mysqli_fetch_object($_resultSet))
		{
			echo $obj_result->CODIGO." | ".$obj_result->DESCRICAO." | ".$obj_result->SIGLA."<BR>";	
		}
	}
	catch (Exception $e)
	{
		echo 'Exception : ',  $e->getMessage(), "\n";
	}
    
?>