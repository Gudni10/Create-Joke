<?php
if (isset($_GET['add'])){

        $pageTitle = 'New joke';
        $action = 'addform';
        $name = '';
        $id = '';
        $button = 'Add joke';
        include 'form.php';
        exit();
    }
    if (isset($_GET['addform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/insertJoke.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getJokeWhereId.php';
        $pageTitle = 'Edit joke';
        $action = 'editform';
        $name = $row['name'];
        $id = $row['id'];
        $button = 'Update joke';
        include 'form.php';
        exit();
    }
    if (isset($_GET['editform'])){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/updateJoke.php';
        header('Location: .');
        exit();
    }
    if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {
		
	
	    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/deleteJokeCategory.php';

        include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/deleteJoke.php';

        header('Location: .');
        exit();
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/getJoke.php';
foreach ($result as $row){
        $jokes[] = array('id' => $row['id'], 'name' => $row['joketext']);
    }

?>