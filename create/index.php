<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/create/worker.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/workers/htmlSpecialChars.php'; ?>

<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="filter.js"></script>
	<link rel="stylesheet" type="text/css" href="create.css">
		<meta charset="utf-8">
		<title> Manage Jokes</title>
	</head>
	<body>
	    <div class="form-group pull-right">
        <input type="text" class="search form-control" placeholder="What you looking for?">
    </div>
		<h1>Manage Jokes</h1>
		<p><a href="worker.php?add">add new joke</a></p>
		<ul id="jokeList">
		<?php foreach ($jokes as $joke): ?>
		<li>
		<form action="" method="post">
		<div>
			<?php echo html ($joke["name"]); ?>
			<input type="hidden" name="id" value="<?php
			echo $joke["id"]; ?>">
			<input type="submit" name="action" value="Edit">
			<input type="submit" name="action" value="Delete">
			</div>
			</form>
		</li>
		<?php endforeach; ?>
 		</ul>
		<p><a href="..">Return to JMS home</a></p>
	</body>
</html>