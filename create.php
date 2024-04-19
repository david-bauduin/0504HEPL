<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon site</title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

<?php require_once(__DIR__ . '/src/partials/header.php');?>

    <div id="corps">
       <h1>Page de création de recette</h1>
       <form action ="src/recipe_post_create.php" method="POST">
            <div>
                <label for="title">Titre de la recette</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="recipe">Contenu de la recette</label>
                <textarea type="text" name="recipe"></textarea>
            </div>
            <button type="submit">Envoyer</button>
       </form>
    </div>

<?php require_once(__DIR__ . '/src/partials/footer.php');?>

</body>

</html>