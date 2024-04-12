<?php

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['full_name']) && isset($_POST['age'])) {
    $sql = 'INSERT INTO `users`(`full_name`, `email`, `password`, `age`) VALUES (:full_name,:email,:password,:age)';
    $request = $client->prepare($sql);
    $request->execute([
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "full_name" => $_POST['full_name'],
        "age" => $_POST['age'],
    ]);
}
?>

<?php if (!isset($_SESSION['loggedUser'])) : ?>
    <form action="index.php" method="POST" class="register-form">
        <div>
            <label for="full_name">Nom Complet</label>
            <input type="text" name="full_name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age">
        </div>
        <button type="submit">Envoyer</button>
        <p class="message">Not Registered ?<a href="#">Create an account</a></p>
    </form>
<?php endif; ?>