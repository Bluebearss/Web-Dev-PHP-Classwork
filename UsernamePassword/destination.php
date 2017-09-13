<!DOCTYPE HTML>
<!-- Brian Zhu -->
<html>
	<head>
		<title></title>
		<style>
		</style>
		<script>
		</script>
	</head>
	
	<body>
		<?php
			$connection = new PDO("mysql:hostname=localhost;dbname=brian_zhu","root","");
			
			$command = "SELECT * FROM `usernamepassword`";
			
			$result = $connection->prepare($command);
			
			$result->execute();
			
			$data = $result->fetch();
			
			print_r($_POST);
			
			if 
		?>
	</body>
</html>