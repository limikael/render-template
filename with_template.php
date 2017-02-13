<?php

	require_once __DIR__."/render_template.php";

	$shoes=array("canvas","high heels","jordan","nike","adidas");

	$data=array(
		"shoes"=>$shoes,
		"numberOfShoes"=>sizeof($shoes)
	);

	//display_template(__DIR__."/shoe_template.tpl.php",$data);
	$output=render_template(__DIR__."/shoe_template.tpl.php",$data);
	echo $output;