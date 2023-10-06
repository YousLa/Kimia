</body>
<footer class="footer-bottom-fixed">
    <?php if (isset($_SESSION['email'])) : ?>
        <!-- TODO Résoudre le soucis avec le fond du logo -->
        <a href='?page=home'><img id="logo-footer" src="assets/img/logo/Kimia-purple.svg" alt=""></a>
    <?php else : ?>
        <a href='?page=home'><img id="logo-footer" src="assets/img/logo/Kimia-purple.svg" alt=""></a>
        <div>
            <p><a href="#">Nous contacter</a> </p>
            <p><a href="#">Conditions d'utilisation</a></p>
            <p><a href="#">À propos</a></p>
        </div>
    <?php endif; ?>
</footer>

</html>