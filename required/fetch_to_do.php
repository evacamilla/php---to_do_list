<?php
require ('required/database.php');

      $statement = $pdo->prepare("SELECT * FROM to_do ORDER BY id DESC");
        $statement->execute();
        $to_do = $statement->fetchAll(PDO::FETCH_ASSOC);