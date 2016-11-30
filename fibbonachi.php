<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fibonacci</title>
<?php
	function fbnc($idx)
	{
		$start = 0;
		$add = 0;
		
		for($i = $start; $i <= $idx; $i++)
		{
			//$i = $i + $add;
			$int = $add + $i;
			$add = $i;
			echo $int."<br>"; 
			
		}
		
	}
	
	function fbnc_array($idx)
	{
		$start = 0;
		$add = 1;
		$arr[0] = 0;
		//$arr[1] = 1;
			
		for($i = $start; $i <= $idx; $i++)
		{
			$arr[$i+$add] = $start + $add;
			$start = $arr[$i+$i++]; // arr sesudah 
			$add = $arr[$i-$i++]; // arr sebelum 
			
		}
		
		print_r($arr);
	}


?>
</head>

<body>
<?php
	//fbnc_array(10);
	
?>

<?php 

$a = 0;
$b = 1;
echo $a."<br/>";

for ($i=1; $i<=10; $i++) {
	
	$c = $a+$b;
	
	echo $c. "<br/>";
	$a = $b;
	$b = $c; // langkah ke dua b = 1 
	
}
?>

</body>
</html>