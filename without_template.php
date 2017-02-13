<?php

	$shoes=array("canvas","high heels","jordan","nike","adidas");

	echo "<h1>list of shoes:</h1><br>";
	echo "number of shoes on stock: ".sizeof($shoes);
	echo "<ul style='background: #ff0000'>";

	foreach ($shoes as $shoe) {
		echo "<li>";
		echo $shoe;
		echo "</li>";
	}

	echo "</ul>";
