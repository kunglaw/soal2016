<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php 
	
	function basename2($url)
	{
		$no_http = trim($url,"http://");
		$segment_url = explode("/",$no_http);
		
		$segment0 = explode(".",$segment_url[0]);
		
		return $segment0[0];		
	}
	
	function basename3($url)
	{	
		$base = basename($url);
		return $base;
	}

?>
</head>

<body>
<?php 
	
	$url = "http://aku.domain.com/2015/04/url-testing";
	echo basename2($url);
	echo "<br>";
	//echo basename3($url);

?>

</body>
</html>