<h1>LOG IN</h1>

<?= $message ?>

<form action="?page=login" method="POST">


    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" name="login">Se connecter</button>
</form>