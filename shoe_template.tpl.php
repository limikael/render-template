<html>
	<head></head>
	<body>
		<h1>This is our list of shoes:</h1>
		Number of shoes on stock: <?php echo $numberOfShoes; ?>
		<ul>
			<?php foreach ($shoes as $shoe) { ?>
				<li><?php echo $shoe; ?></li>
			<?php } ?>
		</ul>
	</body>
</html>