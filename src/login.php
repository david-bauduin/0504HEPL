<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $sql = 'SELECT * FROM `users` WHERE email=:email AND password=:password';
    $request = $client->prepare($sql);
    $request->execute([
        "email" => $_POST['email'],
        "password" => $_POST['password'],
    ]);
    $user = $request->fetch();
    if ($user) {
        $_SESSION['loggedUser'] = true;
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    } else {
        echo 'mauvais login/password';
    }
}

//step 1
//afficher un formulaire
?>

<?php if (!isset($_SESSION['loggedUser'])) : ?>
    <form action="index.php" method="POST" class="login-form">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
        <p class="message">Not Registered ?<a href="#">Create an account</a></p>
    </form>

<?php endif; ?>