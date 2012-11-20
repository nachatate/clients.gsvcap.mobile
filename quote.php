<?php
	
   $json =  file_get_contents('http://finance.google.com/finance/info?client=ig&q=NASDAQ%3aGSVC');
	//echo($json);
	$json = substr($json, 3, strlen($json)-3);
	//echo($json);
	exit($json);
?>