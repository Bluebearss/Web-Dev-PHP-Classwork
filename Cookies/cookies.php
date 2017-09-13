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
			setcookie("test","myname", time() + 300);
			
			session_start();
			
			if (isset($_SESSION["views"]))
				$_SESSION["views"]++;
			else
				$_SESSION["views"] = 1;
				
			echo $_SESSION["views"];
		?>
	</body>
</html>