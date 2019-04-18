<?PHP

	mysqli_report(MYSQLI_REPORT_STRICT); 
	
	echo "Welcome! You can Use PHP & NGINX";
	echo "<br><br>Phpmyadmin : {local_ip}:8080 (username : root // password: root_password)";
	
	
	// development.env
	$host = 'mysql';#docker-compose.yml defined:hostname
	$db = getenv('MYSQL_DATABASE');
	$user = getenv('MYSQL_USER');
	$pass = getenv('MYSQL_PASSWORD');

			
	try {
		$conn = mysqli_connect($host, $user, $pass);
	} catch(mysqli_sql_exception  $e) {
		if($e->getCode()==2002)#DB initilazing for docker
			die("<br><br>Please waiting a few seconds for mysql initilazing.. And refresh again.");
		else
			exit('<br><br>Connection failed: '.mysqli_connect_error().PHP_EOL);
	}
 
	echo '<br><br>MYSQL : Successful database connection!';
   
?>
