<?php
$loggedUser = false;

//step2
//verification des données du formulaire (email + password), avec un foreach dans l'array users
//$loggedUser = true;

if(isset($_POST['email']) && isset($_POST['password'])){
    foreach($users as $user){
        if(
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ){
            echo 'utilisateur connecté';
            $loggedUser = true;
        }
    }
    if(!$loggedUser){
        echo 'mauvais login/password';
    }
}

//step 1
//afficher un formulaire
?>

<?php if (!$loggedUser) : ?>
    <form action="index.php" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Envoyer</button>
       </form>
<?php endif; ?>