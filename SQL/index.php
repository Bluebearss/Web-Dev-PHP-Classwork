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
			
			$command = "SELECT * FROM `nospacesinatablename2.0`";
			
			$result = $connection->prepare($command);
			
			$result->execute();
			
			$data = $result->fetch(PDO::FETCH_NUM);
			
			$data = $result->fetchAll(PDO::FETCH_NUM);
			
			print_r($data);
		?>
	</body>
</html>