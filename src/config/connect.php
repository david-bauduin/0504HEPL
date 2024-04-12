<?php

try {
    $client = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_NAME . '', MYSQL_USER, MYSQL_PASSWORD);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo 'Il y a un problème avec la base de données';
}
