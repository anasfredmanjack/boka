<?php
//==================DB Connection Parameters=============================================================

    $server = 'localhost';
	$username = 'suzyjzkj_bokaadmin';
	$password = 'Afm16772.';
	$database = 'suzyjzkj_boka';

	$link = mysqli_connect($server, $username, $password, $database);
	
	$LivePaymentApi = 'FLWPUBK-672fe31514b1203bbc69a3f8b2df2fe0-X';
	$TestPaymentApi = 'FLWPUBK_TEST-39273a4cb9c3b96a4307ffea31898b95-X';

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$connection = new PDO( 'mysql:host=localhost;dbname=suzyjzkj_boka', $username, $password );
	


?>
