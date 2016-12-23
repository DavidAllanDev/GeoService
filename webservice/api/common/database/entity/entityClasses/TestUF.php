<?
include_once 'UF.php';

	try
	{
		$uf = new UF();
    	$_resultSet = $uf->GetItemList();
		//$_resultSet = $uf->Item("2");

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