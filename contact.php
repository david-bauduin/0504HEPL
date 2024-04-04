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
       <h1>Page de Contact</h1>
       <form>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <button type="submit">Envoyer</button>
       </form>
    </div>

<?php require_once(__DIR__ . '/src/partials/footer.php');?>

</body>

</html>