<?php
	$food = $_GET["food"];
	
	if ($food == "hamburger")
		$group = "Meat";
	else
		if ($food == "strawberry")
			$group = "Fruits & Vegetables";
		else
			if ($food == "ice cream")
				$group = "Dairy";
			else
				if ($food == "bread")
					$group = "Grain";
				else
					$group = "Unknown";
	
	echo $group;
	//Database w/ 2 columns - food, foodgroup. food may be in more than one food group. HTML page will allow you to select a food group. Radio buttons, dropdowns, etc. When you click one, all foods immediately appear. 
?>