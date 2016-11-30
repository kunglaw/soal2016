<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php 
	
	function loop_number($number)
	{
		$base_num = 10;
		$length = strlen((string)$number);
		$hasil = 0;
		for($i=$length;$i>1;$i--)
		{
			$number = $number - $hasil;
			$pow = pow($base_num,$i);
			$bagi = floor($number/$pow);
			$hasil = $bagi*$pow;
			
			echo number_format($hasil)." - $length <br>";
			
			//echo $i."<br>";
		}
		
		
	}


?>
</head>

<body>
<?php 
	loop_number(122326662);
?>
</body>
</html>