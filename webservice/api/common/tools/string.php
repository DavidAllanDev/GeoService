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
				'�' => 'a',
				'�' => 'a',
				'�' => 'a',
				'�' => 'a',
				'�' => 'e',
				'�' => 'e',
				'�' => 'i',
				'�' => 'o',
				'�' => 'o',
				'�' => 'o',
				'�' => 'u',
				'�' => 'u',
				'�' => 'c',
				'�' => 'A',
				'�' => 'A',
				'�' => 'A',
				'�' => 'A',
				'�' => 'E',
				'�' => 'E',
				'�' => 'I',
				'�' => 'O',
				'�' => 'O',
				'�' => 'O',
				'�' => 'U',
				'�' => 'U',
				'�' => 'C'
			);
			
			return strtr($str, $map);
		}
	}

?>