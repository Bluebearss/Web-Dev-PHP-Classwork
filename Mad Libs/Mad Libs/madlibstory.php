<!DOCTYPE HTML>
<!-- Brian Zhu -->
<html>
	<head>
		<title></title>
		<style>
			span
			{
				background-color:#ffff80;
			}
			body
			{
				font-size:150%;
				font-family:lucida sans;
			}
		</style>
		<script>
		</script>
	</head>
	
	<body>
		<h1>Here is your story:</h1>
		LADY: Are you the plumber I sent for?<br />
		PLUMMER: Yes, madam. I came over as
		<span>
			<?php
				echo $_POST['adjective1'];
			?>
		</span>
		as I could. <br />
		Is there something wrong with your
		<span>
			<?php
				echo $_POST['adjective2'];
			?>
		</span>
		?<br />
		LADY: No, it's my
		<span>
			<?php
				echo $_POST['adverb'];
			?>
		</span>
		. The 
		<span>
			<?php
				echo $_POST['exclamation'];
			?>
		</span>
		thing is all stopped up.<br />
		PLUMMER: Have you tried cleaning it with a 
		<span>
			<?php
				echo $_POST['noun1'];
			?>
		</span>
		?<br />
		LADY: Yes, but there was too much 
		<span>
			<?php
				echo $_POST['noun2'];
			?>
		</span>
		in the
		<span>
			<?php
				echo $_POST['noun3'];
			?>
		</span>
		.<br />
		PLUMMER:
		<span>
			<?php
				echo $_POST['noun4'];
			?>
		</span>
		! This looks like it's going to be a 
		<span>
			<?php
				echo $_POST['noun5'];
			?>
		</span>
		job!<br />
		LADY: Do you think I'll need a new
		<span>
			<?php
				echo $_POST['noun6'];
			?>
		</span>
		?<br />
		PLUMMER: Only if your
		<span>
			<?php
				echo $_POST['noun7'];
			?>
		</span>
		is cracked. I'll have to tighten up your
		<span>
			<?php
				echo $_POST['pluralnoun'];
			?>
		</span>
		and check.<br />
		LADY: All right. But make sure you don't scratch my
		<span>
			<?php
				echo $_POST['typeofliquid'];
			?>
		</span>
		or
		<span>
			<?php
				echo $_POST['verb'];
			?>
		</span>
		my floor.
	</body>
</html>