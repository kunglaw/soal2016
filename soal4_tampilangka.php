<?php
	
	// soal no. 4
	function tampilAngka($int)
	{
		for($i=1;$i<=$int;$i++)
		{
		  for($j=1;$j<=$i;$j++)
		  {
			  echo $i;
		  
		  }
		 // echo "<br>";
		}
	}
	
	// soal no.5
	function tampilAngkadesc($int)
	{
		for($i=$int;$i>=1;$i--)
		{
			for($j=$int;$j>=1;$j--)
			{
				echo $i;
				
			}
			echo "<br>";
			$int = $i-1;
		}
		
		
	}
	
	// soal no.6
	function tampilDeretangka($int)
	{
		for($i=1;$i<=$int;$i++)
		{
			for($j=1;$j<=$i;$j++)
			{	
				echo $j;
			}
			echo "<br>";
		}		
	}
	
	// soal no.7
	function tampilDeretangkaDesc($int)
	{	
		for($i=$int;$i>=1;$i--)
		{
			for($j=$i;$j>=1;$j--)
			{	
				echo $j;
			}
			echo "<br>";
		}		

	}
	
	/* 
		soal no. 8
	*/
	
	function mixDeretAngka($int)
	{
		for($i=1;$i<=$int;$i++)
		{
			
			for($j=1;$j<=$i;$j++)
			{
				
				if($i%2 == 0) // genap
				{
					echo $j;
				}
				else if($i%2 > 0)
				{
					echo $i;
				}
				
			}
			echo "<br>";
		
		}
	}
	
	
	/* 
		soal no. 10
	*/
	function mixDeretAngkaDesc($int)
	{
		for($i=$int;$i>=1;$i--)
		{
			
			for($j=$i;$j>=1;$j--)
			{
				
				if($i%2 == 0) // genap
				{
					echo $j;
				}
				else if($i%2 > 0)
				{
					echo $i;
				}
				
			}
			echo "<br>";
		
		}
	}
	
	mixDeretAngkaDesc(10);