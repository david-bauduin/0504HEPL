<header>
    <nav id="menu">
        <h3>Titre menu</h3>
        <ul>
            <li><a class="active" aria-current="page" href="index.php">Home</a></li>
            <li><a class="nav-link" href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['loggedUser'])) : ?>
                <li><a class="nav-link" href="mylist.php">Ma Liste de recettes</a></li>
                <li><a class="nav-link" href="create.php">Créer une recette</a></li>
                <li>
                    <p><?php echo $_SESSION['full_name'] ?></p>
                    <a class="nav-link" href="src/logout.php">Déconnexion</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>