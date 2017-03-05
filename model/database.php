<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=sk2423';
    $username = 'sk2423';
    $password = 'IR8VDFjJC';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
