<div id="top">

    <nav>
        <a href='?page=home'><img id="logo-header" src="assets/img/logo/Kimia.svg" alt=""></a>


        <?php if (isset($_SESSION['email'])) {
            echo "<ul>";
            echo "<a href='?page=profil'>PROFIL</a>";
            echo "<a href='?page=contes'>CONTES</a>";
            echo "</ul>";
            echo "<button id='logout'><a href='?page=login'>Se deconnecter</a></button>";
        } else {
            echo "<button id='login'><a href='?page=login'>S'identifier</a></button>";
        } ?>
    </nav>
</div>