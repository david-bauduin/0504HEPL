<?php
session_start();
require_once(__DIR__ . '/src/functions.php');
require_once(__DIR__ . '/src/config/mysql.php');
require_once(__DIR__ . '/src/config/connect.php');


$sql = 'SELECT title, recipe, author, is_enabled FROM recipes WHERE is_enabled=1';
$request = $client->prepare($sql);
$request->execute();
$recipes = $request->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon site</title>
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts/script.js"></script>
</head>

<body>
    <?php require_once(__DIR__ . '/src/partials/header.php'); ?>

    <div id="corps">
        <div class="login-page">
            <div class="form">
                <?php require_once(__DIR__ . '/src/register.php'); ?>
                <?php require_once(__DIR__ . '/src/login.php'); ?>
            </div>
        </div>

        <?php if (isset($_SESSION['loggedUser'])) : ?>
            <h1>Liste des recettes de cuisine</h1>

            <?php foreach ($recipes as $recipe) : ?>
                <article>
                    <h3><?php echo ($recipe['title']); ?></h3>
                    <div><?php echo ($recipe['recipe']); ?></div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php require_once(__DIR__ . '/src/partials/footer.php'); ?>

</body>

</html>