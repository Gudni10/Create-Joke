<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/db/dbConnect.php';
    try{
        $result = $pdo->query('SELECT id, joketext FROM jokes');
    }
    catch (PDOException $e){
    $error = 'Error fetching jokes details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/gudnikb/jokes/error/error.php';
    exit();
}
?>