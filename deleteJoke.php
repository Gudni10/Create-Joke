<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/nemendur/gudnikb/jokes/db/dbConnect.php';
	try
	{
		$sql = 'DELETE FROM jokes Where id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error deleting joke.';
		include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
		exit();
	}
?>