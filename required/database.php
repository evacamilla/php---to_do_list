<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $pdo = new PDO (
            "mysql:host=localhost;dbname=to_do_list;charset=utf8", "root", "root"
        );

        $statement = $pdo->prepare("SELECT title FROM to_do");
        $statement->execute();
        $to_do = $statement->fetchAll(PDO::FETCH_ASSOC);