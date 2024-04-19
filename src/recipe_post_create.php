<?php
//acceder aux variables de sessions
session_start();

require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/config/connect.php');

//recuperer pdo ect ( les fichiers de config connect.php & mysql.php)

//verifier que les données sont bien passée dans $_POST
// verifie qu'elles ne sont pas passées
if (
    empty($_POST['title'])
    || !isset($_POST['title'])
    || empty($_POST['recipe'])
    || !isset($_POST['recipe'])
) {

    echo 'il faut un titre et une recette pour soumettre le formulaire';
    return;
}

$sql = 'INSERT INTO `recipes`(`title`, `recipe`, `user_id`, `is_enabled`) 
VALUES (:title, :recipe, :user_id, :is_enabled)';
$request = $client->prepare($sql);
$request->execute([
    "title" => htmlspecialchars($_POST['title']),
    "recipe" => htmlspecialchars($_POST['recipe']),
    "user_id" => $_SESSION['user_id'],
    "is_enabled" => 1,
]);
//insérer avec SQL -> pepare & execute les données dans la base de donnée
//INSERT

//rediriger l'utilisateur
header("Location: ../mylist.php");
