<nav>
    <ul>
        <li><a href='?page=home'>HOME</a></li>
        <?php if (isset($_SESSION['email'])) {
            echo "<li><a href='?page=profil'>PROFIL</a></li>";
            echo "<li><a href='?page=contes'>CONTES</a></li>";
            echo "<li><a href='?page=logout'>DECONNEXION</a></li>";
        } else {
            echo "<li><a href='?page=login'>CONNEXION</a></li>";
            echo "<li><a href='?page=signup'>SIGN UP</a></li>
            ";
        } ?>

    </ul>
</nav>