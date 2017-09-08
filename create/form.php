<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/nemendur/gudnikb/jokes/workers/htmlSpecialChars.php"; ?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo html($pageTitle);?></title>
	</head>
	<body>
		<h1> <?php echo html($pageTitle); ?></h1>
		<form action="?<?php echo html($action); ?>" method="post">
			<div>
				<label for="name">Name: <input type="text" name="name" id="name" value="<?php echo html($name);?>"></label>
			</div>
			<div>
				<input type="hidden" name="id" value="<?php echo html($id); ?>">
				<input type="submit" value="<?php echo html($button); ?>">
			</div>
		</form>
	</body>
</html>