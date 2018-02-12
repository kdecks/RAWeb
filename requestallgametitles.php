<?php
	require_once('db.inc.php');
	
	$consoleID = seekGET( 'c', 0 );
	if( $consoleID == 0 )
		$consoleID = seekPOST( 'c', 0 );
		
	if( getGamesList( $consoleID, $dataOut ) )
	{
		echo "OK:";
		foreach( $dataOut as $game )
			echo $game['Title'] . "\n";
	}
	else
	{
		echo "FAILED!";
	}
	
?>