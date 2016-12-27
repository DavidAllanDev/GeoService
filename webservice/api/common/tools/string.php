<?
// By David Allan
	class stringToool
	{
		static function removeAccent($string)
		{
			// assume $str esteja em UTF-8
			$str = $string; 
 
			// assume $str esteja em UTF-8
			$map = array(
				'á' => 'a',
				'à' => 'a',
				'ã' => 'a',
				'â' => 'a',
				'é' => 'e',
				'ê' => 'e',
				'í' => 'i',
				'ó' => 'o',
				'ô' => 'o',
				'õ' => 'o',
				'ú' => 'u',
				'ü' => 'u',
				'ç' => 'c',
				'Á' => 'A',
				'À' => 'A',
				'Ã' => 'A',
				'Â' => 'A',
				'É' => 'E',
				'Ê' => 'E',
				'Í' => 'I',
				'Ó' => 'O',
				'Ô' => 'O',
				'Õ' => 'O',
				'Ú' => 'U',
				'Ü' => 'U',
				'Ç' => 'C'
			);
			
			return strtr($str, $map);
		}
	}

?>